<?php

namespace App\Http\Controllers;

use App\Models\Singkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingkatanController extends Controller
{

    public function get_search(Request $request) {

        $kata = $request['nama_singkatan'];

        $hasil_cari = DB::table('singkatans')->where('nama_singkatan', 'like', '%'. $kata .'%')->get();

        $hitung_hasil = DB::table('singkatans')->where('nama_singkatan', 'like', '%'. $kata .'%')->count();

        // return view('index_filter', ['hasil_cari'=>$hasil_cari]);
        return view('index_filter', compact('hasil_cari', 'hitung_hasil'));

    }


    public function get_id(Request $request) {
        
        $id = $request['id'];

        $hasil_cari = DB::table('singkatans')->where('id', $id)->first();

        return view('index_id', compact('hasil_cari'));

    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Singkatan $singkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Singkatan $singkatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Singkatan $singkatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Singkatan $singkatan)
    {
        //
    }
}
