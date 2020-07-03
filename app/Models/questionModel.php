<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class questionModel
{
    public static function get_data(){
        $items = DB::table('questions')->get();
        return $items;
    }

    public static function save($data){
        $new_items = DB::table('questions')->insert($data);
        return $new_items;
    }
}
