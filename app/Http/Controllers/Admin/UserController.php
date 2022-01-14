<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\carbon;
use File;
use Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = User::whereRoleId(2)->get();
        $users = User::where('role_id',2)->orWhere('role_id',3)->orWhere('role_id',4)->get();
        return view('admin.users.index',compact('users','universities'));
    }

    public function getUsersForAdmin()
    {
        $users = User::where('role_id',2)->orWhere('role_id',3)->orWhere('role_id',4)->get();
        
        $response = [
            'success' => true,
            'data'    => $users,
            'message' => "List of all users",
        ];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        request()->validate([
            'first_name'=>'required|string|min:2|max:255',
            'last_name'=>"nullable|string|min:2|max:255",
            'email'=>"required|email|max:255|unique:users,id",
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country'=>'required|string|min:2|max:255',
            'city'=>'required|string|min:2|max:255',
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hidden_avatar'=> 'nullable|string',
            'password' => 'nullable|min:6|string|confirmed',
        ]);

        $image_name = $req->hidden_avatar;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/avatar'), $image_name);
        }
        $password = User::findOrFail($id)->password;
        if($req->password != ''){
            $password = Hash::make($req->password);
        }

        $form_data = array(
            'role_id' => $req->role_id,
            'first_name' => $req->first_name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'country' => $req->country,
            'city' => $req->city,
            'password'=> $password,
            'avatar' => $image_name,
        );

        User::whereId($id)->update($form_data);
        return redirect('/admin/users')->with('success', 'User has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $user = User::findOrFail($id)->update(array('deleted_at'=>carbon::now()));
        DB::table('oauth_access_tokens')->whereUserId($id)->delete();
        if(isset($req->search)){
            $universities = User::whereRoleId(2)->get();
            $searched_uni = $req->search;
            $users = User::whereHas('university', function($q) use($req){
                $q->whereUniversityId($req->search);
            })->get();
            $userJSON = json_encode($users);
            return view('admin.users.search',compact('users','universities','userJSON','searched_uni'));
        }else{
            return redirect('/admin/users')->with('success', 'User has been deactivated successfully.');
        }
    }

    public function activate(Request $req, $id)
    {
        $user = User::findOrFail($id)->update(array('deleted_at'=>null));
        if(isset($req->search)){
            $universities = User::whereRoleId(2)->get();
            $searched_uni = $req->search;
            $users = User::whereHas('university', function($q) use($req){
                $q->whereUniversityId($req->search);
            })->get();
            $userJSON = json_encode($users);
            return view('admin.users.search',compact('users','universities','userJSON','searched_uni'));
        }else{
            return redirect('/admin/users')->with('success', 'User has been activated successfully.');
        }
    }

    public function search(Request $req)
    {
        $universities = User::whereRoleId(2)->get();
        $searched_uni = $req->search;
        $users = User::whereHas('university', function($q) use($req){
            $q->whereUniversityId($req->search);
        })->get();
        $userJSON = json_encode($users);
        return view('admin.users.search',compact('users','universities','userJSON','searched_uni'));
    }
}
