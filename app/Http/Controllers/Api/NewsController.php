<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use App\Http\Resources\Api\Slider\SliderCollection;
class NewsController extends Controller
{
    public function slider()
    {
        // $slider = DB::table('slider_tbl')->where('is_deleted', 1)->get();
        $slider = Slider::where('is_deleted', 1)->get();
        return response()->json(['slider' =>SliderCollection::collection($slider)]);
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
        `district`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.status=1
        LIMIT 10
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
        `district`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.`status`=1 &&
        `product_categories`.`name` ="' . $news_category . '"
        order by `products`.id desc LIMIT 5
       ');

        return response()->json(['c' => $news]);
    }

    function news_list($news_category)
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
        `district`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.`status`=1 &&
        `product_categories`.`name` ="' . $news_category . '"
        order by `products`.id desc
       ');

        return response()->json(['news_list' => $news]);
    }

    function news_detail($slug)
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
        `district`,
        products.`status`,
        products.`created_at`,
        products.`updated_at`
    FROM
        `products`  JOIN `product_categories` JOIN `product_images`
    WHERE
        `products`.`category`=`product_categories`.`id` && 
        `products`.id=`product_images`.product_id &&
        `products`.`status`=1 &&
        `products`.`slug` ="' . $slug . '"
        order by `products`.id desc LIMIT 1
       ');

        return response()->json(['details' => $news]);
    }



    public function news_image($news_id)
    {
        $news_image = ProductImage::where('product_id', $news_id)->get();
        return response()->json(['news_image' => $news_image]);
    }
}
