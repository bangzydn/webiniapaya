<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $request,$nomor)
    {        
        $result = "Hai antrian ".$nomor." silahkan masuk ke ".$request->perusahaan.
        " dan tunggu di dalam ya pak ".$request->nama;
        return $result;
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,$nomor)
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
