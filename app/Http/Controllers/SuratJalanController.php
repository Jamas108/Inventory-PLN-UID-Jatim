<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;

use Illuminate\Http\Request;

class SuratJalanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    $barangMasuks = BarangMasuk::select('No_Surat', 'File_SuratJalan', 'NamaPerusahaan_Pengirim')->distinct()->get();
    return view('suratjalan.index', compact('barangMasuks'));
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
