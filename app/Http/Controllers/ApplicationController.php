<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{


    public function index()
    {
        $application = DB::table('application')
        ->orderBy('id', 'desc')
        ->get();
        return view('dashboard',['application'=>$application]);
    }


    public function show(Request $request)
    {
        if ($request->input('name') && $request->input('tel')) {
            DB::table('application')->insert([
                'name' => $request->input('name'),
                'tel' => $request->input('tel'),
                'date' => date('d.m.Y'),
                'time' => date("H:i:s")
            ]);
        }

        return json_encode(["name" => $request->input('name'), "tel" => $request->input('tel')]);
    }

    public function delete(Request $request)
    {
        if ($request->input('application_delete')) {
            DB::table('application')->where('id', $request->input('application_delete'))->delete();
             return json_encode(["id" => $request->input('application_delete')]);
        }


    }
}
