<?php

namespace App\Http\Controllers;
use App\Models\proyek;
use App\Models\donasi;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posting = DB::table('donasi')->get();
        $data = proyek::latest()->paginate();
        // $data = proyek::all();

        return view('data', compact('data'));
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
