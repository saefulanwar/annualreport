<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel12;

class Tabel12Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel12 = Tabel12::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel12Count = Tabel12::count();
        return view('backend.bidang1.tabel12.index', compact('tabel12','tabel12Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel12 $tabel12)
    {
        return view('backend.bidang1.tabel12.create', compact('tabel12'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel12::create($request->all());

        return redirect('/backend/tabel12')->with('message', 'Your data was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabel12 = Tabel12::findOrFail($id);
        return view("backend.bidang1.tabel12.edit", compact('tabel12'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabel12 = Tabel12::findOrFail($id);
        $tabel12->update($request->all());
        return redirect('/backend/tabel12')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel12::findOrFail($id)->delete();

        return redirect('/backend/tabel12')->with('error-message', 'Your data was deleted');
    }
}
