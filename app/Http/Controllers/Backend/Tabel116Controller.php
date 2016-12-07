<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel116;

class Tabel116Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel116 = tabel116::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel116Count = tabel116::count();
        return view('backend.bidang1.tabel116.index', compact('tabel116','tabel116Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tabel116 $tabel116)
    {
        return view('backend.bidang1.tabel116.create', compact('tabel116'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tabel116::create($request->all());

        return redirect('/backend/tabel116')->with('message', 'Your data was created successfully!');
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
        $tabel116 = tabel116::findOrFail($id);
        return view("backend.bidang1.tabel116.edit", compact('tabel116'));
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
        $tabel116 = tabel116::findOrFail($id);
        $tabel116->update($request->all());
        return redirect('/backend/tabel116')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tabel116::findOrFail($id)->delete();

        return redirect('/backend/tabel116')->with('error-message', 'Your data was deleted');
    }
}
