<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view ('frontend.pertanyaan.index');
    }

    public function detail()
    {
        return view ('frontend.pertanyaan.detail');
    }
}
