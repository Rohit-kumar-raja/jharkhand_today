<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductFeature;
use App\Models\ProductImage;
use App\Models\Slider;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public $page_name = 'News';
    public function index()
    {
        // if (Auth::id() == 1) {
        // } else {
        //     $Products = Product::where('created_by_user_id', Auth::id())->get();
        // }
        $Products = Product::all();
        return view('products.index', ['data' => $Products, 'page' => $this->page_name]);
    }

    public function singleCategoryNews(Request $request)
    {
        $category = ProductCategory::where('name',$request->category)->first();

        $products = Product::where('category',$category->id)->get();

        return view('products.index', ['data' => $products, 'page' => $this->page_name]);
    }
    public  function insert()
    {
        $category = ProductCategory::all();
        return view('products.insert', ['category' => $category, 'page' => $this->page_name]);
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
        // return $request;

        $id =   Product::insertGetId($request->except('_token', 'img', 'title', 'description'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                ProductImage::insertGetId(['name' => $this->insert_image($image, 'products'), 'size' => '0', 'product_id' => $id]);
            }
        }

        // for ($i = 0; $i < count($request->title); $i++) {
        //     ProductFeature::insert([
        //         'title' => $request->title[$i],
        //         'description' => $request->description[$i],
        //         'product_id' => $id,
        //         'created_at' => date('Y-m-d h:m:s')
        //     ]);
        // }

        return redirect()->back()->with(['store' => 'Data successfully Saved ']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        $status = Product::find($request->id);
        $msg = "";

        if ($request->isChecked == 1)
        {
            $newsImage = ProductImage::where('product_id', $request->id)->first();

            $slider = new Slider();
            $slider->title = $status->slug;
            $slider->sub_title = $status->log_title;
            $slider->image_name = $newsImage->name;
            $slider->description = "";
            $slider->is_deleted = 1;
            $slider->save();
            $msg = "Added to Breaking News & Slider. + ";
        }
        else
        {
            $found = Slider::where('title', $request->slug)->first();
            // return $found;
            if ($found)
            {
                $found->delete();
                $msg = "Removed from Breaking News & Slider. + ";
            }
        }

        if ($status->status == 1) {
            Product::where('id', $request->id)->update(['status' => '0']);
            $msg .= "News Disapproved Successfully";
            return redirect()->back()->with('status', $msg);
        } else {
            $msg .= "News Approved Successfully";

            Product::where('id', $request->id)->update(['status' => '1']);
            return redirect()->back()->with('status1', $msg);
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
        return view('products.update', ["data" => $data, 'category' => $category, 'page' => $this->page_name]);
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
        // $request->validate([
        //     'title' => 'required',
        //     'slug' => 'required|unique:products'
        // ]);

        $id = $request->id;
        Product::where('id', $id)->update($request->except("_token", 'img', 'title', 'description'));
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                ProductImage::insertGetId(['name' => $this->insert_image($image, 'products'), 'size' => '0', 'product_id' => $id]);
            }
        }

        // for ($i = 0; $i < count($request->title); $i++) {
        //     ProductFeature::insert([
        //         'title' => $request->title[$i],
        //         'description' => $request->description[$i],
        //         'product_id' => $id,
        //         'created_at' => date('Y-m-d h:m:s')
        //     ]);
        // }


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

            $images = ProductImage::where('product_id', $id)->get();
            foreach ($images as $img) {
                $this->imageDelete($img->id);
            }
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
