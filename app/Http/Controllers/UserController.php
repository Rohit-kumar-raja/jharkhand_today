<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserCollection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Session;
use Auth;



class UserController extends Controller
{

    public function index()
    {
        return view('user.user');
    }

    public function getUsers()
    {
        $data = User::all();
        $users = UserCollection::collection($data);
        return response()->json(["status" => true, "data" => $users]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $usr = new User();
        $msg = "User Created Successfully";

        $usr->name = $request->name;
        $usr->role_name = $request->role_name;
        $usr->email = $request->email;
        $usr->password = $request->password;
        $usr->save();

        return response()->json(["status" => true, "message" => $msg]);
    }

    public function show($id)
    {
        $usr = User::findOrFail($id);
        return response()->json(["status" => true, 'message' => '', "data" => $usr]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usr = User::find($id);
        if (empty($usr)) {
            $message = "User not found";
            return response()->json(['data' => $usr, 'message' => $message]);
        }
        $usr->name = $request->name;
        $usr->role_name = $request->role_name;
        $usr->email = $request->email;
        $usr->password = $request->password;
        $usr->save();
        $msg = "User Updated Successfully";
        return response()->json(["status" => true, "message" => $msg]);
    }

    public function destroy($id)
    {
        $usr = User::find($id);
        if (empty($usr)) {
            $message = "User not Found";
            return response()->json(['message' => $message, 'status' => false]);
        }
        // $usr->blogs()->delete();
        $usr->delete();
        $message = 'User Deleted Successfully';
        return response()->json(['message' => $message, 'status' => true]);
    }
}
