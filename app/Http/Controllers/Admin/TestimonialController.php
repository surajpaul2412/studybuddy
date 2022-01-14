<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(20);
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        request()->validate([
            'name'=>'required|string|min:2|max:255',
            'designation'=>"string|string|min:2",
            'avatar'=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'content'=> 'nullable|string',
            'is_active'=> 'required',
        ]);

        $image_name = $req->avatar;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonial'), $image_name);
        }

        $testimonial = new Testimonial();
        $testimonial->name = $req->name;
        $testimonial->designation = $req->designation;
        $testimonial->content = $req->content;
        $testimonial->avatar = $image_name;
        $testimonial->is_active = $req->is_active;
        $testimonial->save();
        return redirect('/admin/testimonial')->with('success', 'New testimonial has been added.');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
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
            'name'=>'required|string|min:2|max:255',
            'designation'=>"string|string|min:2",
            'avatar'=>"nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'hidden_thumbnail'=> 'nullable|string',
            'content'=> 'nullable|string',
            'is_active'=> 'required',
        ]);

        $image_name = $req->hidden_thumbnail;
        $image = $req->file('avatar');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonial'), $image_name);
        }

        $form_data = array(
            'name' => $req->name,
            'designation' => $req->designation,
            'avatar' => $image_name,
            'content' => $req->content,
            'is_active'=> $req->is_active           
        );

        Testimonial::whereId($id)->update($form_data);
        return redirect('/admin/testimonial')->with('success', 'Testimonial has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id)->delete();
        return redirect('/admin/testimonial')->with('success', 'Testimonial has been deleted successfully.');
    }
}
