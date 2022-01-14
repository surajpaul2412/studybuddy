<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use Auth;
use Carbon\carbon;
use App\Http\Requests\AddCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;

class CollegeController extends Controller
{
    // object for all collages
    public function getAllCollages()
    {
        $colleges = College::whereUniversityId(Auth::user()->id)->get();
        $response = [
            'success' => true,
            'data'    => $colleges,
            'message' => "List of all colleges",
        ];
        return response()->json($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::whereUniversityId(Auth::user()->id)->get();
        return view('university.college.index',compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('university.college.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCollegeRequest $req)
    {
        $college = new College();
        $college->name = $req->name;
        $college->university_id = Auth::user()->id;
        $college->save();
        return redirect('/university/college')->with('success', 'College has been added.');
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
        $college = College::findOrFail($id);
        return view('university.college.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollegeRequest $req, $id)
    {
        $form_data = array(
            'name' => $req->name,
        );

        College::whereId($id)->update($form_data);
        return redirect('/university/college')->with('success', 'College has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::findOrFail($id)->update(array('deleted_at'=>carbon::now()));
        return redirect('/university/college')->with('success', 'College has been deactivated successfully.');
    }

    public function activate($id)
    {
        $college = College::findOrFail($id)->update(array('deleted_at'=>null));
        return redirect('/university/college')->with('success', 'College has been activated successfully.');
    }
}
