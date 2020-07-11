<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;
use App\Tag;
use App\User;

class PertanyaanController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view ('frontend.pertanyaan.index', compact('tags'));
    }

    public function detail($id)
    {

        $pertanyaan = Pertanyaan::where('id', $id)->first();
        $user = User::where(['id'=>$pertanyaan->user_id])->first();

        return view ('frontend.pertanyaan.detail', compact('pertanyaan', 'user'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $data['judul'];
        $pertanyaan->isi = $data['content'];
        $pertanyaan->user_id = \Auth::user()->id;
        $pertanyaan->save();

        $pertanyaan->tag()->attach($request->input('tag'));

        return redirect()->back()->with('status', 'Pertanyaan berhasil ditambah');
    }
}
