<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel13;

class Tabel13Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel13 = Tabel13::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel13Count = Tabel13::count();
        return view('backend.bidang1.tabel13.index', compact('tabel13','tabel13Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel13 $tabel13)
    {
        return view('backend.bidang1.tabel13.create', compact('tabel13'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel13::create($request->all());

        return redirect('/backend/tabel13')->with('message', 'Your data was created successfully!');
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
        $tabel13 = Tabel13::findOrFail($id);
        return view("backend.bidang1.tabel13.edit", compact('tabel13'));
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
        $tabel13 = Tabel13::findOrFail($id);
        $tabel13->update($request->all());
        return redirect('/backend/tabel13')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel13::findOrFail($id)->delete();

        return redirect('/backend/tabel13')->with('error-message', 'Your data was deleted');
    }
}
