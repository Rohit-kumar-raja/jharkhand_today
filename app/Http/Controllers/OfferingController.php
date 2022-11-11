<?php

namespace App\Http\Controllers;

use App\Models\Offering;
use Exception;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offering = Offering::all();
        return view('offering.index', ['data' => $offering]);
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
        $id =   Offering::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            Offering::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'offering')]);
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
        $status = Offering::find($id);
        if ($status->status == 1) {
            Offering::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            Offering::where('id', $id)->update(['status' => '1']);
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
        $data = Offering::find($id);
        return view('offering.update', ["data" => $data,]);
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
        Offering::where('id', $id)->update($request->except("_token", 'images'));
        if ($request->file('images')) {
            $this->update_images('offerings', $id, $request->file('images'), 'offering', 'images');
        }
        return redirect('offering')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Offering::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/offering/' . $image_name));
        } catch (Exception $e) {
        }
        Offering::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
