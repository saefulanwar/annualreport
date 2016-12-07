<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel24;
class Tabel24Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel24 = Tabel24::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel24Count = Tabel24::count();
        return view('backend.bidang2.tabel24.index', compact('tabel24','tabel24Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel24 $tabel24)
    {
        return view('backend.bidang2.tabel24.create', compact('tabel24'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel24::create($request->all());

        return redirect('/backend/tabel24')->with('message', 'Your data was created successfully!');
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
        $tabel24 = Tabel24::findOrFail($id);
        return view("backend.bidang2.tabel24.edit", compact('tabel24'));
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
        $tabel24 = Tabel24::findOrFail($id);
        $tabel24->update($request->all());
        return redirect('/backend/tabel24')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel24::findOrFail($id)->delete();

        return redirect('/backend/tabel24')->with('error-message', 'Your data was deleted');
    }
}
