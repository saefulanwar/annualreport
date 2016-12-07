<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel34;

class Tabel34Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel34 = Tabel34::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel34Count = Tabel34::count();
        return view('backend.bidang3.tabel34.index', compact('tabel34','tabel34Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel34 $tabel34)
    {
        return view('backend.bidang3.tabel34.create', compact('tabel34'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel34::create($request->all());

        return redirect('/backend/tabel34')->with('message', 'Your data was created successfully!');
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
        $tabel34 = Tabel34::findOrFail($id);
        return view("backend.bidang3.tabel34.edit", compact('tabel34'));
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
        $tabel34 = Tabel34::findOrFail($id);
        $tabel34->update($request->all());
        return redirect('/backend/tabel34')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel34::findOrFail($id)->delete();

        return redirect('/backend/tabel34')->with('error-message', 'Your data was deleted');
    }
}
