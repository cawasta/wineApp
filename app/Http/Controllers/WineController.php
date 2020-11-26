<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine as Wine;

class WineController extends Controller
{
    public function index()
    {
        $wines = Wine::all();
        //$arr = [];
        //json_encode($wines); TODO
        
        foreach ($wines as $wine) {

            $arr[] = array(
                'name' => $wine->name,
                'country' => $wine->country,
                'region' => $wine->region,
                'estate' => $wine->estate,
                'variety' => $wine->variety,
                'vintage' => $wine->vintage,
                'price' => $wine->price / 100,
                'type' => $wine->type,
                'image' => $wine->image
            );
        }

        //WineController::debug($arr);
        echo json_encode($arr);
    }

    public static function debug($arr) {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }

}
