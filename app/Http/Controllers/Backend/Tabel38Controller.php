<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel38;

class Tabel38Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel38 = Tabel38::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel38Count = Tabel38::count();
        return view('backend.bidang3.tabel38.index', compact('tabel38','tabel38Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel38 $tabel38)
    {
        return view('backend.bidang3.tabel38.create', compact('tabel38'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel38::create($request->all());

        return redirect('/backend/tabel38')->with('message', 'Your data was created successfully!');
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
        $tabel38 = Tabel38::findOrFail($id);
        return view("backend.bidang3.tabel38.edit", compact('tabel38'));
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
        $tabel38 = Tabel38::findOrFail($id);
        $tabel38->update($request->all());
        return redirect('/backend/tabel38')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel38::findOrFail($id)->delete();

        return redirect('/backend/tabel38')->with('error-message', 'Your data was deleted');
    }
}
