<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SitesettingController extends Controller
{
    function index($slug)
    {
        $site_setting = About::where('slug', $slug)->get();
        return response()->json(['site_setting' => $site_setting]);
    }

    function site_info()
    {
        $site_info = SiteInfo::first();
        return response()->json(['site_info' => $site_info]);
    }
}
