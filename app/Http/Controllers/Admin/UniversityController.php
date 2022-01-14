<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentDetail;
use App\Models\College;
use App\Http\Requests\AddUniversityRequest;
use Illuminate\Support\Facades\Hash;
use Carbon\carbon;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id',2)->paginate(12);
        return view('admin.university.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUniversityRequest $req)
    {
        $image_name = $req->avatar;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/avatar'), $image_name);
        }

        $user = new User();
        $user->role_id = 2;
        $user->first_name = $req->first_name;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->country = $req->country;
        $user->city = $req->city;
        $user->email_domain = $req->email_domain;
        $user->password = Hash::make($req->password);
        $user->avatar = $image_name;
        $user->status = 0;
        $user->save();
        return redirect('/admin/university')->with('success', 'University has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colleges = College::whereUniversityId($id)->get();
        return view('admin.university.show', compact('colleges','id'));
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
        return view('admin.university.edit', compact('user'));
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
            'email_domain' => 'required|string',
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
            'role_id' => 2,
            'first_name' => $req->first_name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'country' => $req->country,
            'city' => $req->city,
            'email_domain' => $req->email_domain,
            'password'=> $password,
            'avatar' => $image_name,
        );

        User::whereId($id)->update($form_data);
        return redirect('/admin/university')->with('success', 'University has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->update(array('status'=>0));
        return redirect('/admin/university')->with('success', 'University has been Deactivated.');
    }

    public function activate($id)
    {
        $user = User::findOrFail($id)->update(array('status'=>0));
        return redirect('/admin/university')->with('success', 'University has been Deactivated.');
    }

    public function deactivate($id)
    {
        $user = User::findOrFail($id)->update(array('status'=>1));
        return redirect('/admin/university')->with('success', 'University has been Activated.');
    }

    public function getAllUniversityColleges($id)
    {
        $colleges = College::whereUniversityId($id)->withCount('students')->get();
        $colleges = [
            'success' => true,
            'data'    => $colleges,
            'message' => "List of all colleges",
        ];

        return response()->json($colleges);
    }

    public function showCreate($id)
    {
        return view('admin.university.showCreate', compact('id'));
    }

    public function showStore(request $req,$id)
    {
        request()->validate([
            'name'=>'required|string|min:2|max:255',
        ]);

        $college = new College();
        $college->university_id = $id;
        $college->name = $req->name;
        $college->save();
        return redirect('/admin/university/'.$id)->with('success', 'College has been added.');
    }

    public function showEdit($id, $data)
    {
        $college = College::findOrFail($data);
        return view('admin.university.showEdit', compact('college','id','data'));
    }

    public function showUpdate(Request $req, $id)
    {
        $form_data = array(
            'name' => $req->name,
            'university_id' => $id,
        );

        College::whereId($req->data)->update($form_data);
        return redirect('/admin/university/'.$id)->with('success', 'College has been updated.');
    }

    public function showDeactivate($id, $data)
    {
        $college = College::findOrFail($data)->update(array('deleted_at'=>carbon::now()));
        return redirect('/admin/university/'.$id)->with('success', 'College has been deactivated successfully.');
    }

    public function showActivate($id, $data)
    {
        $college = College::findOrFail($data)->update(array('deleted_at'=>null));
        return redirect('/admin/university/'.$id)->with('success', 'College has been activated successfully.');
    }

    public function showStudents($id, $data){
        $students = StudentDetail::whereCollegeId($data)->with('user')->get();
        $studentsJSON = json_encode($students);
        $college = College::findOrFail($data);

        return view('admin.university.showStudents',compact('id','students','studentsJSON','college'));
    }
}
