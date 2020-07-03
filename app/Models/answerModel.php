<?php

namespace App;


namespace App\Models;
use Illuminate\Support\Facades\DB;

class answerModel
{
    public static function get_data(){
        $items = DB::table('answers')->get();
        return $items;
    }

    public static function save($data){
        $new_items = DB::table('answers')->insert($data);
        return $new_items;
    }
}
