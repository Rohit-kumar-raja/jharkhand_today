<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public $page_name = "Slider";
    public function index()
    {
        $slider = DB::table('slider_tbl')->get();
        return view('slider.index', ['data' => $slider, 'url' => $this->slider_url(),'page'=>$this->page_name]);
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
        $image_name = '';
        $id =   DB::table('slider_tbl')->insertGetId($request->except('_token'));

        if ($request->file('image_name')) {
            $image = $request->file('image_name');
            $destinationPath = 'upload/slider/';
            $image_name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $image_name);
        }
        DB::table('slider_tbl')
            ->where('id', $id)
            ->update(['image_name' => $image_name]);
        return redirect()->back()->with(['store' => '']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $status =  DB::table('slider_tbl')->find($id);
        if ($status->is_deleted == 1) {
            DB::table('slider_tbl')->where('id', $id)->update(['is_deleted' => '0']);
        } else {

            DB::table('slider_tbl')->where('id', $id)->update(['is_deleted' => '1']);
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('slider_tbl')->find($id);
        return view('slider.update', ["data" => $data, 'url' => $this->slider_url(),'page'=>$this->page_name]);
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
        if ($request->file('image_name')) {
            $image_name = DB::table('slider_tbl')->find($id);
            $image_name = $image_name->image_name;
            $image = $request->file('image_name');
            $destinationPath = 'upload/slider/';
            echo  $image->move($destinationPath, $image_name);
        }
        $result = DB::table('slider_tbl')
            ->where('id', $request->id)
            ->update($request->except(['_token', 'id', 'image_name']));
        return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = DB::table('slider_tbl')->find($id);
        $image_name = $image_name->image_name;
        if (file_exists(public_path('upload/slider/' . $image_name))) {
            unlink(public_path('upload/slider/' . $image_name));
        }
        DB::table('slider_tbl')->delete($id);
        return redirect()->back();
    }
}
