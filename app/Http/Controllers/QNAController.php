<?php

namespace App\Http\Controllers;

use App\Qna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('admin/showDataInfo', compact('qna'));
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

        return redirect()->route('qna.create')->with('successCreateData', 'Data berhasil ditambah !')->with(compact('validasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function show(Qna $qna)
    {
        return view ('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function edit(Qna $qna)
    {
        return view('admin.edit', compact('qna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'jenis' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);
        Qna::whereId($id)->update($validasi);

        return redirect()->route('qna.index')->with('successUpdate', 'Data berhasil di update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qna  $qna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qna = Qna::findOrFail($id);
        $qna->delete();

        return redirect()->back()->with('successDelete', 'Data berhasil dihapus !');
    }

    public function uploadfile() {
        return view('admin.upload');
    }

    public function process ($jenis) {
        return view('admin/showDataInfo', compact('jenis'));
    }

    public function search (Request $request)
    {
        $input = $request->search;
        $search = DB::table('qna')->where('pertanyaan', 'like', "%" .$input. "%")->get();
        return view('admin.searchData', compact('search'));
    }
}
