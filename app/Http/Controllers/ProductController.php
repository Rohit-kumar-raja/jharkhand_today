<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductFeature;
use App\Models\ProductImage;
use Exception;

class ProductController extends Controller
{
    public $page_name = 'Products';
    public function index()
    {
        $Products = Product::all();
        return view('products.index', ['data' => $Products,'page'=>$this->page_name]);
    }

    public  function insert()
    {
        $category = ProductCategory::all();
        return view('products.insert', ['category' => $category]);
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


        $id =   Product::insertGetId($request->except('_token', 'img', 'title', 'description'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                ProductImage::insertGetId(['name' => $this->insert_image($image, 'products'), 'size' => '0', 'product_id' => $id]);
            }
        }

        for ($i = 0; $i < count($request->title); $i++) {
            ProductFeature::insert([
                'title' => $request->title[$i],
                'description' => $request->description[$i],
                'product_id' => $id,
                'created_at' => date('Y-m-d h:m:s')
            ]);
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
        $status = Product::find($id);
        if ($status->status == 1) {
            Product::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            Product::where('id', $id)->update(['status' => '1']);
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
        $data = Product::find($id);
        $category = ProductCategory::all();
        return view('products.update', ["data" => $data, 'category' => $category,'page'=>$this->page_name]);
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
        Product::where('id', $id)->update($request->except("_token", 'img', 'title', 'description'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                ProductImage::insertGetId(['name' => $this->insert_image($image, 'products'), 'size' => '0', 'product_id' => $id]);
            }
        }

        for ($i = 0; $i < count($request->title); $i++) {
            ProductFeature::insert([
                'title' => $request->title[$i],
                'description' => $request->description[$i],
                'product_id' => $id,
                'created_at' => date('Y-m-d h:m:s')
            ]);
        }


        return back()->with(['update' => "Data successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image_name = Product::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/Products/' . $image_name));
        } catch (Exception $e) {
        }
        Product::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }

    public function imageDelete($id)
    {
        $image_name = ProductImage::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/Products/' . $image_name));
        } catch (Exception $e) {
        }
        ProductImage::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
