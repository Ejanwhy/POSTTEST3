<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class donasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posting = DB::table('donasi')->get();

        // $posting = all::;

        return view('index', ['posting' => $posting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donors');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('donasi')->insert([
            'nama' => $request->nama,
            'id_proyek' => $request->id_proyek,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nomor_telpon' => $request->nomor_telpon,
            'jumlah_sumbangan' => $request->jumlah_sumbangan,
            'metode_pembayaran' => $request->metode_pembayaran
        ]);

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

