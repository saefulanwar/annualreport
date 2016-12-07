<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel33;

class Tabel33Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel33 = Tabel33::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel33Count = Tabel33::count();
        return view('backend.bidang3.tabel33.index', compact('tabel33','tabel33Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel33 $tabel33)
    {
        return view('backend.bidang3.tabel33.create', compact('tabel33'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel33::create($request->all());

        return redirect('/backend/tabel33')->with('message', 'Your data was created successfully!');
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
        $tabel33 = Tabel33::findOrFail($id);
        return view("backend.bidang3.tabel33.edit", compact('tabel33'));
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
        $tabel33 = Tabel33::findOrFail($id);
        $tabel33->update($request->all());
        return redirect('/backend/tabel33')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel33::findOrFail($id)->delete();

        return redirect('/backend/tabel33')->with('error-message', 'Your data was deleted');
    }
}
