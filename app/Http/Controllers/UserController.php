<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function login(Request $request)
    {
        if (!$request->username)
            return response()->json([
                'message' => 'User belum di isi'
            ], 400);
        else if (!$request->password)
            return response()->json([
                'message' => 'Password belum di isi'
            ], 400);
        else {
            $results = DB::select("SELECT uuid FROM [user]");
            return response()->json([
                'message' => $results[0],
                'userId' => 123
            ], 200);
        }
    }
    //
}
