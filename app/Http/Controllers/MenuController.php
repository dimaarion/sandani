<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
    	$menu = DB::table('menu')->get();


    	return view("admin.menu",["menu"=>$menu,"select"=>$menu]) ;
    }




     public function move(Request $request){

          $name = $request->input('menu_create');
          $menu_delete = $request->input('menu_delete');
          $menu_save = $request->input('menu_save');
          $menu_checkbox = $request->input('menu_checkbox');

           if($name){
           	DB::table('menu')->insert([
           		'names' => '',
           		'alias' => '',
				'title' => '',
           		'keywords' => '',
           		'description' => '',
           		'parent' => 0]);
           	return	redirect()->route('menu');

           }elseif($menu_delete){
				DB::table('menu')->where('id',$menu_delete)->delete();
           		return redirect()->route('menu');
           }elseif ($menu_save) {
           	            $names = $request->input('menu_names'.$menu_save);
              			$alias = $request->input('menu_alias'.$menu_save);
						$title = $request->input('menu_title'.$menu_save);
              			$keywords = $request->input('menu_keywords'.$menu_save);
              			$description = $request->input('menu_description'.$menu_save);
              			$parent = $request->input('menu_select'.$menu_save);;
				DB::table('menu')
              		->where('id', $menu_save)
              		->update([
              			'names' => $names?$names:'name',
              			'alias' => $alias?$alias:'alias',
						'title' => $title?$title:$names,
              			'keywords' => $keywords?$keywords:$names,
              			'description' =>$description?$description:$names,
              			'parent' => $parent?$parent:0,
              		]);
              	return redirect()->route('menu');
           }else {
           	    return redirect()->route('menu');
           }


	}


}
