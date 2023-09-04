<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{


    private function getDB()
    {
        $application = DB::table('application')
            ->orderBy('id', 'desc')
            ->get();

        $reviews = DB::table('reviews')
            ->orderBy('id', 'desc')
            ->get();
        return  ["menu" => $this->getMenu(), "reviews" => $reviews, 'application' => $application];
    }

    public function index()
    {
        return view('pages.reviews', $this->getDB());
    }

    public function indexAdmin()
    {
        $application = DB::table('application')
            ->orderBy('id', 'desc')
            ->get();

        $reviews = DB::table('reviews')
            ->orderBy('id', 'desc')
            ->get();
        return view('dashboard', $this->getDB());
    }

    public function create(Request $request)
    {
        DB::table('reviews')->insert([
            'name' => $request->input('name'),
            'text' => $request->input('text'),
            'date' => date('d.m.Y'),
            'display' => '0'
        ]);
        return json_encode([$request->input('name'), $request->input('text')]);
    }

    public function update(Request $request)
    {

        if ($request->input('reviews_display_id') || $request->input('reviews_save')) {
            DB::table('reviews')
                ->where('id', $request->input('reviews_display_id'))
                ->update([
                    'name' => $request->input('reviews_name'),
                    'text' => $request->input('reviews_text'),
                    'date' => $request->input('reviews_data'),
                    'display' => $request->input('reviews_display'),
                ]);

        }
        if ($request->input('reviews_save')) {
            DB::table('reviews')
                ->where('id', $request->input('reviews_save'))
                ->update([
                    'name' => $request->input('reviews_name'),
                    'text' => $request->input('reviews_text'),
                    'date' => $request->input('reviews_data'),
                    'display' => $request->input('reviews_display_save'),
                ]);

        }

        if ($request->input('reviews_delete')) {
            DB::table('reviews')->where('id', $request->input('reviews_delete'))->delete();
            return redirect()->route('dashboard');
        }
        return redirect()->route('dashboard');
    }




}
