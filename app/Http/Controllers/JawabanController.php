<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionModel;

class JawabanController extends Controller
{
    public function index(){
        return view('jawaban.index');
    }
}
