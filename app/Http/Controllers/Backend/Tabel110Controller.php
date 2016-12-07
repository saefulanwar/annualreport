<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel110;

class Tabel110Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel110 = Tabel110::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel110Count = Tabel110::count();
        return view('backend.bidang1.tabel110.index', compact('tabel110','tabel110Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel110 $tabel110)
    {
        return view('backend.bidang1.tabel110.create', compact('tabel110'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel110::create($request->all());

        return redirect('/backend/tabel110')->with('message', 'Your data was created successfully!');
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
        $tabel110 = Tabel110::findOrFail($id);
        return view("backend.bidang1.tabel110.edit", compact('tabel110'));
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
        $tabel110 = Tabel110::findOrFail($id);
        $tabel110->update($request->all());
        return redirect('/backend/tabel110')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel110::findOrFail($id)->delete();

        return redirect('/backend/tabel110')->with('error-message', 'Your data was deleted');
    }
}
