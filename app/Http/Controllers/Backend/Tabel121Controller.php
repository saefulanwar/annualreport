<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel121;

class Tabel121Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel121 = Tabel121::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel121Count = Tabel121::count();
        return view('backend.bidang1.tabel121.index', compact('tabel121','tabel121Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel121 $tabel121)
    {
        return view('backend.bidang1.tabel121.create', compact('tabel121'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel121::create($request->all());

        return redirect('/backend/tabel121')->with('message', 'Your data was created successfully!');
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
        $tabel121 = Tabel121::findOrFail($id);
        return view("backend.bidang1.tabel121.edit", compact('tabel121'));
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
        $tabel121 = Tabel121::findOrFail($id);
        $tabel121->update($request->all());
        return redirect('/backend/tabel121')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Tabel121::findOrFail($id)->delete();

        return redirect('/backend/tabel121')->with('error-message', 'Your data was deleted');
    }
}
