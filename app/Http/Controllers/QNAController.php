<?php

namespace App\Http\Controllers;

use App\Qna;
use Illuminate\Http\Request;

class QNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qna = Qna::all();
        return view('admin/showData', compact('qna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jenis' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        $qna = Qna::create($validasi);

        return redirect('admin')->with('success', 'Data berhasil ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function show(Qna $qna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function edit(Qna $qna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qna $qna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qna $qna)
    {
        //
    }
}
