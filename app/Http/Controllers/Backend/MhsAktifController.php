<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Mhsaktif;

class MhsAktifController extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhsaktif = Mhsaktif::latest()->orderBy('tahun','asc')->paginate(15);
        $mhsaktifCount = Mhsaktif::count();
        return view('backend.bidang1.mhsaktif.index', compact('mhsaktif','mhsaktifCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mhsaktif $mhsaktif)
    {
        return view('backend.bidang1.mhsaktif.create', compact('mhsaktif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mhsaktif::create($request->all());

        return redirect('/backend/mhsaktif')->with('message', 'Your data was created successfully!');
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
        $mhsaktif = Mhsaktif::findOrFail($id);
        return view("backend.bidang1.mhsaktif.edit", compact('mhsaktif'));
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
        $mhsaktif = Mhsaktif::findOrFail($id);
        $mhsaktif->update($request->all());
        return redirect('/backend/mhsaktif')->with('message', 'Your mahasiswa aktif was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mhsaktif::findOrFail($id)->delete();

        return redirect('/backend/mhsaktif')->with('error-message', 'Your mahasiswa aktif was deleted');
    }
}
