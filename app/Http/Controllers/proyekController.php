<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\proyek;

class proyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function project()
    {
        //
        // $posting = DB::table('proyek')->get();

        $posting = proyek::all();

        return view('project', ['posting' => $posting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahproyek');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('proyek')->insert([
            'judul_proyek' => $request->judul_proyek,
            'deskripsi' => $request->deskripsi,
            'tujuan_dana' => $request->tujuan_dana,
            'dana_terkumpul' => $request->dana_terkumpul,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai
        ]);

        return redirect('/project');
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
        $posting = DB::table('proyek')->where('id',$id)->get();
         return view('edit', ['posting' => $posting]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('proyek')->where('id',$request->id)->update([
            'judul_proyek' => $request->judul_proyek,
            'deskripsi' => $request->deskripsi,
            'tujuan_dana' => $request->tujuan_dana,
            'dana_terkumpul' => $request->dana_terkumpul,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai
            
            ]);
        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('proyek')->where('id',$id)->delete();
        return redirect('/project')->with('success', 'Data telah terhapus');
    }
}
