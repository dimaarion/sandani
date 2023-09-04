<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CalculatorController extends Controller
{


    public function calculator()
    {

        $calculator = DB::table('prais')->get();
        return json_encode($calculator);
    }

    public function grid()
    {
        $grid = DB::table('grid')->get();
        return json_encode($grid);
    }

    public function tide()
    {
        $tide = DB::table('tide')->get();
        return json_encode($tide);
    }

    public function result(Request $request)
    {
        $calculator_profile = DB::table('prais')
            ->where('profiles', '=', $request->input("profiles"))
            ->where('okno', '=', $request->input("okno"))
            ->where('stvorka', '=', $request->input("stvorka"))
            ->where('width', '=', $request->input("width"))
            ->where('height', '=', $request->input("height"))->get();
        return json_encode($calculator_profile);
    }
    public function dopWork()
    {
        $dopWork = DB::table('calculator')->get();
        return json_encode($dopWork);
    }


}
