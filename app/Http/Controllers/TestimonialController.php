<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Exception;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('testimonial.index', ['data' => $testimonial]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id =   Testimonial::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            Testimonial::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'testimonial')]);
        }
        return redirect()->back()->with(['store' => 'Data successfully Saved ']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $status = Testimonial::find($id);
        if ($status->status == 1) {
            Testimonial::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status','Status Successfully Deactivated');

        } else {
            Testimonial::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1','Status Successfully Activated');
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('testimonial.update', ["data" => $data,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        Testimonial::where('id', $id)->update($request->except("_token",'images'));
        if ($request->file('images')) {
            $this->update_images('testimonials', $id, $request->file('images'), 'testimonial', 'images');
        }
        return redirect('testimonial')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Testimonial::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/testimonial/' . $image_name));
        } catch (Exception $e) {
        }
        Testimonial::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
