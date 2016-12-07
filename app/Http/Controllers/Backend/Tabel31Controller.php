<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel31;

class Tabel31Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel31 = Tabel31::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel31Count = Tabel31::count();
        return view('backend.bidang3.tabel31.index', compact('tabel31','tabel31Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel31 $tabel31)
    {
        return view('backend.bidang3.tabel31.create', compact('tabel31'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel31::create($request->all());

        return redirect('/backend/tabel31')->with('message', 'Your data was created successfully!');
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
        $tabel31 = Tabel31::findOrFail($id);
        return view("backend.bidang3.tabel31.edit", compact('tabel31'));
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
        $tabel31 = Tabel31::findOrFail($id);
        $tabel31->update($request->all());
        return redirect('/backend/tabel31')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel31::findOrFail($id)->delete();

        return redirect('/backend/tabel31')->with('error-message', 'Your data was deleted');
    }
}
