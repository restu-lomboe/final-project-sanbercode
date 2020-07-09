<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;
use App\Http\Requests\Pertanyaan\PertanyaanCreateRequest;
use App\Http\Requests\Pertanyaan\PertanyaanUpdateRequest;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PertanyaanCreateRequest $request)
    {
        try {
            Pertanyaan::create($request->all());
            return redirect()->back()->with(['error' => false, 'message' => 'Create pertanyaan success']);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => true, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pertanyaan::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PertanyaanUpdateRequest $request, $id)
    {
        try {
            $pertanyaan = Pertanyaan::find($id);
            $pertanyaan->update($request->all());
            return redirect()->back()->with(['error' => false, 'message' => 'Update pertanyaan success']);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => true, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pertanyaan = Pertanyaan::find($id);
            if($pertanyaan->jawaban->isEmpty()) {
                $pertanyaan->delete();
                return redirect()->back()->with(['error' => false, 'message' => 'Delete pertanyaan success']);
            } else {
                return redirect()->back()->with(['error' => false, 'message' => 'Pertanyaan masih memiliki jawaban']);
            }
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => true, 'message' => $e->getMessage()]);
        }
    }
}
