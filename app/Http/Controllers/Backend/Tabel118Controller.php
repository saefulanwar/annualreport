<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel118;

class Tabel118Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel118 = Tabel118::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel118Count = Tabel118::count();
        return view('backend.bidang1.tabel118.index', compact('tabel118','tabel118Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel118 $tabel118)
    {
        return view('backend.bidang1.tabel118.create', compact('tabel118'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel118::create($request->all());

        return redirect('/backend/tabel118')->with('message', 'Your data was created successfully!');
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
        $tabel118 = Tabel118::findOrFail($id);
        return view("backend.bidang1.tabel118.edit", compact('tabel118'));
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
        $tabel118 = Tabel118::findOrFail($id);
        $tabel118->update($request->all());
        return redirect('/backend/tabel118')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel118::findOrFail($id)->delete();

        return redirect('/backend/tabel118')->with('error-message', 'Your data was deleted');
    }
}
