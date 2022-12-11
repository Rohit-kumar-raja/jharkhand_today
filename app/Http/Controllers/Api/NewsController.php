<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function slider()
    {
        $slider = DB::table('slider_tbl')->where('is_deleted', 1)->get();
        return response()->json(['slider' => $slider]);
    }

    public function news_category()
    {
        $news_category = ProductCategory::where('status', 1)->orderByDesc('id')->get();
        return response()->json(['news_category' => $news_category]);
    }

    public function news()
    {
        // $news = Product::where('status', 1)->orderByDesc('id')->limit(12)->get();
        $news = DB::select('SELECT
        DISTINCT products.id,
        `category`,
        `product_categories`.`name` as `category_name`,
        product_images.name as images,
        `slug`,
        `log_title`,
        `log_description`,
        `youtube`,
        `view360`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.status=1
        order by `products`.id desc
       ');

        return response()->json(['news' => $news]);
    }

    function cateogry_news($news_category)
    {
        $news = DB::select('SELECT
        DISTINCT products.id,
        `category`,
        `product_categories`.`name` as `category_name`,
        product_images.name as images,
        `slug`,
        `log_title`,
        `log_description`,
        `youtube`,
        `view360`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.`status`=1 &&
        `product_categories`.`name` ="'.$news_category.'"
        order by `products`.id desc LIMIT 5
       ');

        return response()->json([$news_category => $news]);
    }


    public function news_image($news_id)
    {
        $news_image = Product::where('product_id', $news_id)->where('status', 1)->get();
        return response()->json(['news_image' => $news_image]);
    }
}
