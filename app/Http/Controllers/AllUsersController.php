<?php

namespace App\Http\Controllers;

use App\Models\AllUsers;
use Exception;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers = AllUsers::all();
        return view('allusers.index', ['data' => $allusers,'url'=>$this->web_url()]);
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
        $id =   AllUsers::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            AllUsers::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'allusers')]);
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
        $status = AllUsers::find($id);
        if ($status->status == 1) {
            AllUsers::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            AllUsers::where('id', $id)->update(['status' => '1']);
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
        $data = AllUsers::find($id);
        return view('allusers.update', ["data" => $data,]);
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
        AllUsers::where('id', $id)->update($request->except("_token", 'images'));
        if ($request->file('images')) {
            $this->update_images('all_users', $id, $request->file('images'), 'allusers', 'images');
        }
        return redirect('allusers')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = AllUsers::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/allusers/' . $image_name));
        } catch (Exception $e) {
        }
        AllUsers::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
