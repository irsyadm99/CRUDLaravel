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
        $item = questionModel::save($data);
        return \redirect('/pertanyaan');
    }

    public function show($id){
        $items = questionModel::show_detail($id);
        return view('pertanyaan.detail', \compact('items'));
    }

    public function destroy($id){
        $items = questionModel::destroy($id);
        return \redirect('/pertanyaan');
    }

    public function edit($id){
        $items = questionModel::show_edit($id);
        return view('pertanyaan.edit', \compact('items'));
    }

    public function update($id, Request $req){
        $items = questionModel::update($id, $req->all());
        return \redirect('/pertanyaan');
    }
}
