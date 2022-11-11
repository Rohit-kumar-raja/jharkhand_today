<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = Category::all();
        return view('category.index', ['data' => $Category]);
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
        $id =   Category::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            Category::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'category')]);
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
        $status = Category::find($id);
        if ($status->status == 1) {
            Category::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status','Status Successfully Deactivated');

        } else {
            Category::where('id', $id)->update(['status' => '1']);
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
        $data = Category::find($id);
        return view('category.update', ["data" => $data,]);
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
        Category::where('id', $id)->update($request->except("_token",'images'));
        if ($request->file('images')) {
            $this->update_images('categorys', $id, $request->file('images'), 'category', 'images');
        }
        return redirect('category')->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Category::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/Category/' . $image_name));
        } catch (Exception $e) {
        }
        Category::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
