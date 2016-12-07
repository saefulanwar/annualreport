<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel214;

class Tabel214Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel214 = Tabel214::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel214Count = Tabel214::count();
        return view('backend.bidang2.tabel214.index', compact('tabel214','tabel214Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel214 $tabel214)
    {
        return view('backend.bidang2.tabel214.create', compact('tabel214'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel214::create($request->all());

        return redirect('/backend/tabel214')->with('message', 'Your data was created successfully!');
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
        $tabel214 = Tabel214::findOrFail($id);
        return view("backend.bidang2.tabel214.edit", compact('tabel214'));
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
        $tabel214 = Tabel214::findOrFail($id);
        $tabel214->update($request->all());
        return redirect('/backend/tabel214')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel214::findOrFail($id)->delete();

        return redirect('/backend/tabel214')->with('error-message', 'Your data was deleted');
    }
}
