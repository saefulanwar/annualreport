<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel14;

class Tabel14Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel14 = Tabel14::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel14Count = Tabel14::count();
        return view('backend.bidang1.tabel14.index', compact('tabel14','tabel14Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel14 $tabel14)
    {
        return view('backend.bidang1.tabel14.create', compact('tabel14'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel14::create($request->all());

        return redirect('/backend/tabel14')->with('message', 'Your data was created successfully!');
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
        $tabel14 = Tabel14::findOrFail($id);
        return view("backend.bidang1.tabel14.edit", compact('tabel14'));
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
        $tabel14 = Tabel14::findOrFail($id);
        $tabel14->update($request->all());
        return redirect('/backend/tabel14')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel14::findOrFail($id)->delete();

        return redirect('/backend/tabel14')->with('error-message', 'Your data was deleted');
    }
}
