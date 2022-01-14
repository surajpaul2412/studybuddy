<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Legal;

class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legals = Legal::paginate(20);
        return view('admin.legal.index',compact('legals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.legal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        request()->validate([
            'title'=>'required|string|min:2|max:255',
            'description'=>"string|string|min:2",
            'thumbnail'=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'slug' => 'required|string',
            'meta_title'=>'nullable|string|min:2|max:255',
            'meta_keyword'=>'nullable|string',
            'meta_description'=> 'nullable|string',
            'is_active'=> 'required',
        ]);

        $image_name = $req->thumbnail;
        $image = $req->file('thumbnail');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/document_thumbnails'), $image_name);
        }

        $legal = new Legal();
        $legal->title = $req->title;
        $legal->description = $req->description;
        $legal->slug = $req->slug;
        $legal->meta_title = $req->meta_title;
        $legal->meta_keyword = $req->meta_keyword;
        $legal->meta_description = $req->meta_description;
        $legal->thumbnail = $image_name;
        $legal->is_active = $req->is_active;
        $legal->save();
        return redirect('/admin/legal')->with('success', 'New document has been added.');
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
        $legal = Legal::findOrFail($id);
        return view('admin.legal.edit', compact('legal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        request()->validate([
            'title'=>'required|string|min:2|max:255',
            'description'=>"string|string|min:2",
            'thumbnail'=>"nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'hidden_thumbnail'=> 'nullable|string',
            'slug' => 'required|string',
            'meta_title'=>'nullable|string|min:2|max:255',
            'meta_keyword'=>'nullable|string',
            'meta_description'=> 'nullable|string',
            'is_active'=> 'required',
        ]);

        $image_name = $req->hidden_thumbnail;
        $image = $req->file('thumbnail');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/document_thumbnails'), $image_name);
        }

        $form_data = array(
            'title' => $req->title,
            'description' => $req->description,
            'slug' => $req->slug,
            'meta_title' => $req->meta_title,
            'meta_keyword' => $req->meta_keyword,
            'meta_description' => $req->meta_description,
            'is_active'=> $req->is_active,
            'thumbnail' => $image_name,
        );

        Legal::whereId($id)->update($form_data);
        return redirect('/admin/legal')->with('success', 'Document has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $legal = Legal::findOrFail($id)->delete();
        return redirect('/admin/legal')->with('success', 'Document has been deleted successfully.');
    }
}
