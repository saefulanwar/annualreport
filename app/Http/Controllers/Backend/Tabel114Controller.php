<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel114;

class Tabel114Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel114 = Tabel114::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel114Count = Tabel114::count();
        return view('backend.bidang1.tabel114.index', compact('tabel114','tabel114Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel114 $tabel114)
    {
        return view('backend.bidang1.tabel114.create', compact('tabel114'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel114::create($request->all());

        return redirect('/backend/tabel114')->with('message', 'Your data was created successfully!');
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
        $tabel114 = Tabel114::findOrFail($id);
        return view("backend.bidang1.tabel114.edit", compact('tabel114'));
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
        $tabel114 = Tabel114::findOrFail($id);
        $tabel114->update($request->all());
        return redirect('/backend/tabel114')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel114::findOrFail($id)->delete();

        return redirect('/backend/tabel114')->with('error-message', 'Your data was deleted');
    }
}
