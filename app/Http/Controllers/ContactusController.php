<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Exception;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = Contactus::all();
        return view('contactus.index', ['data' => $contactus]);
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
        $id =   Contactus::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            Contactus::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'contactus')]);
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
        $status = Contactus::find($id);
        if ($status->status == 1) {
            Contactus::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            Contactus::where('id', $id)->update(['status' => '1']);
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
        $data = Contactus::find($id);
        return view('contactus.update', ["data" => $data,]);
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
        Contactus::where('id', $id)->update($request->except("_token", 'images'));
        if ($request->file('images')) {
            $this->update_images('contactus', $id, $request->file('images'), 'contactus', 'images');
        }
        return redirect('contactus')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Contactus::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/contactus/' . $image_name));
        } catch (Exception $e) {
        }
        Contactus::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
