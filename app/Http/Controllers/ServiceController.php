<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\serviceImage;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', ['data' => $services]);
    }

    public  function insert()
    {
        $category = Category::all();
        return view('services.insert', ['category' => $category]);
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

        $id =   Service::insertGetId($request->except('_token', 'img'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                serviceImage::insertGetId(['name' => $this->insert_image($image, 'services'), 'size' => '0', 'service_id' => $id]);
            }
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
        $status = Service::find($id);
        if ($status->status == 1) {
            Service::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            Service::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
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
        $data = Service::find($id);
        $category = Category::all();
        return view('services.update', ["data" => $data, 'category' => $category]);
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
        Service::where('id', $id)->update($request->except("_token", 'img'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                serviceImage::insertGetId(['name' => $this->insert_image($image, 'services'), 'size' => '0', 'service_id' => $id]);
            }
        }
        return redirect('services')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Service::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/services/' . $image_name));
        } catch (Exception $e) {
        }
        Service::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }

    public function imageDelete($id)
    {
        $image_name = serviceImage::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/services/' . $image_name));
        } catch (Exception $e) {
        }
        serviceImage::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
