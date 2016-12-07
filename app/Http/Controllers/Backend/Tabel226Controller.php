<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel226;
class Tabel226Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel226 = Tabel226::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel226Count = Tabel226::count();
        return view('backend.bidang2.tabel226.index', compact('tabel226','tabel226Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel226 $tabel226)
    {
        return view('backend.bidang2.tabel226.create', compact('tabel226'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel226::create($request->all());

        return redirect('/backend/tabel226')->with('message', 'Your data was created successfully!');
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
        $tabel226 = Tabel226::findOrFail($id);
        return view("backend.bidang2.tabel226.edit", compact('tabel226'));
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
        $tabel226 = Tabel226::findOrFail($id);
        $tabel226->update($request->all());
        return redirect('/backend/tabel226')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel226::findOrFail($id)->delete();

        return redirect('/backend/tabel226')->with('error-message', 'Your data was deleted');
    }
}
