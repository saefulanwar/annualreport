<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Mabareg;

class MabaRegController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mabareg = Mabareg::latest()->orderBy('tahun','asc')->paginate(15);
        $mabaregCount = Mabareg::count();
        return view('backend.bidang1.mabareg.index', compact('mabareg','mabaregCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mabareg $mabareg)
    {
        return view('backend.bidang1.mabareg.create', compact('mabareg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mabareg::create($request->all());

        return redirect('/backend/mabareg')->with('message', 'Your data was created successfully!');
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
        $mabareg = Mabareg::findOrFail($id);
        return view("backend.bidang1.mabareg.edit", compact('mabareg'));
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
        $mabareg = Mabareg::findOrFail($id);
        $mabareg->update($request->all());
        return redirect('/backend/mabareg')->with('message', 'Your mahasiswa registrasi was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mabareg::findOrFail($id)->delete();

        return redirect('/backend/mabareg')->with('error-message', 'Your mahasiswa registrasi was deleted');
    }
}
