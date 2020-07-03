<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionModel;

class PertanyaanController extends Controller
{
    public function create(){
        return view('form');
    }

    public function index(){
        $items = questionModel::get_data();
        //dd($items);
        return view('pertanyaan.index', \compact('items'));
    }

    public function store(Request $req){
        $data = $req->all();
        unset($data["_token"]);
        $item = questionModel::save($data);
        if($item){
            return "success";
        }
    }
}
