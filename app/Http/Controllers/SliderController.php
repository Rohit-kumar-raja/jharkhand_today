<?php

namespace App\Http\Controllers;

use App\Traits\UploaderTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Media;
use App\Models\Slider;
class SliderController extends Controller
{
    use UploaderTrait;
    public $page_name = "Slider";
    public function index()
    {
        $slider = Slider::get();
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
        $slider_tbl =   Slider::create($request->except('_token'));
    // return $request->all();
        // if ($request->file('image_name')) {
        //     $image = $request->file('image_name');
        //     $destinationPath = 'upload/slider/';
        //     $image_name = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $image_name);
        // }
        $this->uploadFile($request,$slider_tbl);

        DB::table('slider_tbl')
            ->where('id', $slider_tbl->id)
            ->update(['image_name' => $image_name]);
        return redirect()->back()->with(['store' => '']);
    }

    public function uploadFile($request, $item)
    {
        // return $item->id;
        if ($request->has('image_name')) {
            if (!empty($request->image_name)) {
                $photo = $this->storeFileMultipart($request->image_name, 'slider');
                $input['file_name'] = $photo['name'];
                $input['status'] = 1;
                $input['file_type'] = 'image';
                $media = Media::create([
                    'table_type' => get_class($item),
                    'table_id' => $item->id,
                    'file_name' => $input['file_name'],
                    'status' => $input['status'],
                    'default' => null,
                    'file_type' => $input['file_type']
                ]);
            }
        }
        // return true;
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
        $slider = Slider::find($request->id);
        if ($request->file('image_name')) {
            if(!empty($slider->media))
            {
                $this->deleteFile($slider->media->file_name);
            }
            $this->uploadFile($request,$slider);
            // $image_name = DB::table('slider_tbl')->find($id);
            // $image_name = $image_name->image_name;
            // $image = $request->file('image_name');
            // $destinationPath = 'upload/slider/';
            // echo  $image->move($destinationPath, $image_name);
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
