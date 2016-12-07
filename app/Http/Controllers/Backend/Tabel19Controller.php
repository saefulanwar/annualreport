<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel19;

class Tabel19Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel19 = Tabel19::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel19Count = Tabel19::count();
        return view('backend.bidang1.tabel19.index', compact('tabel19','tabel19Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel19 $tabel19)
    {
        return view('backend.bidang1.tabel19.create', compact('tabel19'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel19::create($request->all());

        return redirect('/backend/tabel19')->with('message', 'Your data was created successfully!');
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
        $tabel19 = Tabel19::findOrFail($id);
        return view("backend.bidang1.tabel19.edit", compact('tabel19'));
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
        $tabel19 = Tabel19::findOrFail($id);
        $tabel19->update($request->all());
        return redirect('/backend/tabel19')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel19::findOrFail($id)->delete();

        return redirect('/backend/tabel19')->with('error-message', 'Your data was deleted');
    }
}
