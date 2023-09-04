<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $props = [];
    public $array_menu;
    public $menu = array();
    public $active = "active";
    public $footer = false;

    public function getMenu()
    {
        $menu = DB::table('menu')->get();
        $this->props = $menu;
        $newArr = [];
        foreach ($this->props as $key => $value) {
            $newArr[$key] = [
                "id" => $value->id,
                "names" => $value->names,
                "title" => $value->title,
                "alias" => $value->alias,
                "keywords" => $value->keywords,
                "description" => $value->description,
                "parent" => $value->parent
            ];
        }
        $arr =  $newArr;

        foreach ($arr as $key => $value) {
            $this->menu[$value['parent']][$value['id']] = $value;
        }

        try {
            $treeElem = $this->menu[0];
            $this->genElement($treeElem, $this->menu);
            return $treeElem;
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function genElement(&$treeElem, $menu)
    {
        $arrMenu = $treeElem;
        if (!isset($arrMenu)) {
            $arrMenu = [];
        }
        foreach ($arrMenu as $key => $value) {
            if (!isset($value['cild'])) {
                $treeElem[$key]['cild'] = array();
            }
            if (array_key_exists($key, $menu)) {
                $treeElem[$key]['cild'] = $menu[$key];
                $this->genElement($treeElem[$key]['cild'], $this->menu);
            }
        }
    }
    public function child($x, $u, $alias)
    {

        foreach ($x as $key => $value) {
            if ($value['alias'] == $alias) {
                $c = $this->active;
            } else {
                $c = '';
            }
            echo  '<li class="pod nav "><a href="' . $value['alias'] . '" class="nav-link pb-0 pl-0 ml-0 ' . $c . '">' . $value['names'] . '</a>';
            if ($value['cild']) :
                echo '<ul>';
                $this->child($value['cild'], $u, $alias);
                echo '</ul>';
                echo '</li>';
            endif;
        }
    }

    public function menu_recursions($alias = '', $color_active = '')
    {
        $arrMenu = $this->getMenu();
        if (!isset($arrMenu)) {
            $arrMenu = [];
        }

        foreach ($arrMenu as $key => $value) {

            if ($value['alias'] == $alias) {
                $c = $this->active;
            } else {
                $c = '';
            }

            echo '<li class="nav-item "><a class="nav-link ' . $c . '"   href="' . $value['alias'] . '">' . $value['names'] . '</a>';
            echo "<div></div>";
            if ($value['cild'] && $this->footer == false) :
                echo '<ul>';
                $this->child($value['cild'], $value['alias'], $alias);
                echo '</ul>';
                echo '</li>';
            endif;
        }
    }

    function galleryImgTxt($img)
    {

        
        $gallery = [];
        foreach (Storage::files($img) as $key => $value) {
                $pathName = pathinfo($value);
                if ($key == 0) {
                    if (!Storage::exists($pathName['dirname'].'/text')) {
                        Storage::makeDirectory($pathName['dirname'].'/text');
                    }
                }
               
          if (!Storage::exists($pathName['dirname'].'/text/'.$pathName['filename'].'.txt')) {
            Storage::put($pathName['dirname'].'/text/'.$pathName['filename'].'.txt', '');
            }
            $gallery[$key] = ['src' => preg_replace('/public/','storage',$value), 'alt'=>Storage::get($pathName['dirname'].'/text/'.$pathName['filename'].'.txt')];
        }

        return  $gallery;
    }
}
