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
        unset($data["_token"]);
        $new_items = DB::table('questions')->insert($data);
        return $new_items;
    }

    public static function show_detail($id){
        $items = DB::table('questions')->where('id', $id)->first();
        return $items;
    }

    public static function destroy($id){
        $items = DB::table('questions')
                    ->where('id', $id)
                    ->delete();
        
        return $items;

    }
    public static function show_edit($id){
        $items = DB::table('questions')->where('id', $id)->first();
        return $items;
    }

    public static function update($id, $req){
        $items = DB::table('questions')
                    ->where('id', $id)
                    ->update([
                        'judul' => $req["judul"],
                        'pertanyaan' => $req["pertanyaan"]
                    ]);
        return $items;            
    }
    
}
