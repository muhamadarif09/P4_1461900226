<?php

namespace App\Http\Controllers;
use App\Exports\RakExport;
use Maatwebsite\Excel\Facades\Excel;
use App\rak_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rak = DB::table('rak_buku')->join('buku' , 'rak_buku.id_buku' , '=' , 'buku.id')->join('jenis_buku' , 'rak_buku.id_jenis_buku', '=' , 'jenis_buku.id')
                    ->get();
                    return view('rak0226', ['rak' => $rak]);

        // $rak = rak_buku::all();
        // $rak->join('buku' , 'rak_buku.id_buku' , '=' , 'buku.id')->join('jenis_buku' , 'rak_buku.id_jenis_buku', '=' , 'jenis_buku.id')->get();
        //                 return view('rak0226', ['rak' => $rak]);

    }
    public function export(){
        return Excel::download(new RakExport, 'Data_1461900226.xlsx');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rak_buku  $rak_buku
     * @return \Illuminate\Http\Response
     */
    public function show(rak_buku $rak_buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rak_buku  $rak_buku
     * @return \Illuminate\Http\Response
     */
    public function edit(rak_buku $rak_buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rak_buku  $rak_buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rak_buku $rak_buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rak_buku  $rak_buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(rak_buku $rak_buku)
    {
        //
    }
}
