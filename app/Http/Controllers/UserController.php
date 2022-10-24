<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = DB::table('userdatas')->where('email', $email)->where('password', $password)->first();

        return response()->json($user);
    }

    public function register(Request $request)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;

        $simpan = DB::table('userdatas')->insert($data);
        if($simpan)
        {
            return response()->json(['status' => 201]);
        }else{
            return response()->json(['status' => 500]);
        }
    }

    public function getAll()
    {

        $data = DB::table('userdatas')->get();
        return response()->json($data);  return response()->json(['status' => 500]);
        
    }
}
