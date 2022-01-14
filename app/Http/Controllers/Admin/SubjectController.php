<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\AddSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Carbon\carbon;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subject.index',compact('subjects'));
    }

    public function getAllSubjects()
    {
        $subjects = Subject::all();
        
        $response = [
            'success' => true,
            'data'    => $subjects,
            'message' => "List of all subjects",
        ];

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddSubjectRequest $req)
    {
        $subject = new Subject();
        $subject->name = $req->name;
        $subject->save();
        return redirect('/admin/subject')->with('success', 'Subject has been added.');
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
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $req, $id)
    {
        $form_data = array(
            'name' => $req->name,
        );

        Subject::whereId($id)->update($form_data);
        return redirect('/admin/subject')->with('success', 'Subject has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id)->update(array('deleted_at'=>carbon::now()));
        return redirect('/admin/subject')->with('success', 'Subject has been deactivated successfully.');
    }

    public function activate($id)
    {
        $subject = Subject::findOrFail($id)->update(array('deleted_at'=>null));
        return redirect('/admin/subject')->with('success', 'Subject has been activated successfully.');
    }
}
