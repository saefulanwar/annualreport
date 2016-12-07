<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel16;

class Tabel16Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel16 = Tabel16::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel16Count = Tabel16::count();
        return view('backend.bidang1.tabel16.index', compact('tabel16','tabel16Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel16 $tabel16)
    {
        return view('backend.bidang1.tabel16.create', compact('tabel16'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel16::create($request->all());

        return redirect('/backend/tabel16')->with('message', 'Your data was created successfully!');
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
        $tabel16 = Tabel16::findOrFail($id);
        return view("backend.bidang1.tabel16.edit", compact('tabel16'));
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
        $tabel16 = Tabel16::findOrFail($id);
        $tabel16->update($request->all());
        return redirect('/backend/tabel16')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel16::findOrFail($id)->delete();

        return redirect('/backend/tabel16')->with('error-message', 'Your data was deleted');
    }
}
