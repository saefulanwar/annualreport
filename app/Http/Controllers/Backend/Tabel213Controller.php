<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel213;

class Tabel213Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel213 = Tabel213::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel213Count = Tabel213::count();
        return view('backend.bidang2.tabel213.index', compact('tabel213','tabel213Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel213 $tabel213)
    {
        return view('backend.bidang2.tabel213.create', compact('tabel213'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel213::create($request->all());

        return redirect('/backend/tabel213')->with('message', 'Your data was created successfully!');
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
        $tabel213 = Tabel213::findOrFail($id);
        return view("backend.bidang2.tabel213.edit", compact('tabel213'));
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
        $tabel213 = Tabel213::findOrFail($id);
        $tabel213->update($request->all());
        return redirect('/backend/tabel213')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel213::findOrFail($id)->delete();

        return redirect('/backend/tabel213')->with('error-message', 'Your data was deleted');
    }
}
