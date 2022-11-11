<?php

namespace App\Http\Controllers;

use App\Models\Edge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edge = Edge::all();
        return view('edge.index', ['data' => $edge]);
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
        $id =   Edge::insertGetId($request->except('_token'));
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
        $status = Edge::find($id);
        if ($status->status == 1) {
            Edge::where('id', $id)->update(['status' => '0']);
        } else {
            Edge::where('id', $id)->update(['status' => '1']);
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
        $data = Edge::find($id);
        return view('edge.update', ["data" => $data,]);
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
        Edge::where('id', $id)->update($request->except("_token"));
        return redirect('edge')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Edge::find($id);
        $image_name = $image_name->image_name;
        if (file_exists(public_path('upload/edge/' . $image_name))) {
            unlink(public_path('upload/edge/' . $image_name));
        }
        Edge::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
