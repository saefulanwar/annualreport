<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel122;

class Tabel122Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel122 = Tabel122::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel122Count = Tabel122::count();
        return view('backend.bidang1.tabel122.index', compact('tabel122','tabel122Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel122 $tabel122)
    {
        return view('backend.bidang1.tabel122.create', compact('tabel122'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel122::create($request->all());

        return redirect('/backend/tabel122')->with('message', 'Your data was created successfully!');
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
        $tabel122 = Tabel122::findOrFail($id);
        return view("backend.bidang1.tabel122.edit", compact('tabel122'));
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
        $tabel122 = Tabel122::findOrFail($id);
        $tabel122->update($request->all());
        return redirect('/backend/tabel122')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel122::findOrFail($id)->delete();

        return redirect('/backend/tabel122')->with('error-message', 'Your data was deleted');
    }
}
