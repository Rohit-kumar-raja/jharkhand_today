<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CareerController extends Controller
{
    //    page name for showing into the blade
    public $page_name = 'Career';
    public function index()
    {
        $career = Career::all();
        return view('career.index', ['data' => $career, 'page' => $this->page_name]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $id =   Career::insertGetId($request->except('_token'));
        if ($request->file('images')) {
            Career::where('id', $id)->update(['images' => $this->insert_image($request->file('images'), 'career')]);
        }
        return redirect()->back()->with(['store' => 'Data successfully Saved ']);
    }



    public function status($id)
    {
        $status = Career::find($id);
        if ($status->status == 1) {
            Career::where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            Career::where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
        }
    }


    public function edit($id)
    {
        $data = Career::find($id);
        return view('career.update', ["data" => $data, 'page' => $this->page_name]);
    }


    public function update(Request $request)
    {
        $id = $request->id;
        Career::where('id', $id)->update($request->except("_token", 'images'));
        if ($request->file('images')) {
            $this->update_images('careers', $id, $request->file('images'), 'career', 'images');
        }
        return redirect('career')->with(['update' => "Data successfully Updated"]);
    }

    public function apply()
    {
        $apply = DB::table('career_applied')->get();
        return view('career_applied.index', ['data' => $apply, 'page' => 'Career Applyed User ']);
    }

    public function apply_status($id){

        $status = DB::table('career_applied')->find($id);
        if ($status->status == 1) {
            DB::table('career_applied')->where('id', $id)->update(['status' => '0']);
            return redirect()->back()->with('status', 'Status Successfully Deactivated');
        } else {
            DB::table('career_applied')->where('id', $id)->update(['status' => '1']);
            return redirect()->back()->with('status1', 'Status Successfully Activated');
        }
    }


    function apply_destroy($id)
    {
        DB::table('career_applied')->delete($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }


    public function destroy($id)
    {
        $image_name = Career::find($id);
        $image_name = $image_name->images;
        try {
            unlink(public_path('upload/career/' . $image_name));
        } catch (Exception $e) {
        }
        Career::destroy($id);
        return redirect()->back()->with(['delete' => 'Data Successfully Deleted']);
    }
}
