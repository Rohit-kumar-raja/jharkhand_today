<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    function slider()
    {
        $slider =  DB::table('slider_tbl')->where('status', 1)->get();
        return response()->json(['slider' => $slider]);
    }

    function news_category()
    {
        $news_category = ProductCategory::where('status', 1)->paginate(10);
        return response()->json(['news_category' => $news_category]);
    }

    function news()
    {
        $news = Product::where('status', 1)->paginate(10);
        return response()->json(['news' => $news]);
    }

    function news_image($news_id)
    {
        $news_image = Product::where('product_id', $news_id)->where('status', 1)->get();
        return response()->json(['news_image' => $news_image]);
    }
}
