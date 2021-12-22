<?php

namespace App\Http\Controllers;
use DB;

class ExampleController extends Controller
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

    public function getDataPasien()
    {
        $Data = DB::table("pasien")->get();
        return response()->json(["status"=>"200", "result"=>$Data]);
    }
}
