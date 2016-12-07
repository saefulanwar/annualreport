<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel32;

class Tabel32Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel32 = Tabel32::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel32Count = Tabel32::count();
        return view('backend.bidang3.tabel32.index', compact('tabel32','tabel32Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel32 $tabel32)
    {
        return view('backend.bidang3.tabel32.create', compact('tabel32'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel32::create($request->all());

        return redirect('/backend/tabel32')->with('message', 'Your data was created successfully!');
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
        $tabel32 = Tabel32::findOrFail($id);
        return view("backend.bidang3.tabel32.edit", compact('tabel32'));
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
        $tabel32 = Tabel32::findOrFail($id);
        $tabel32->update($request->all());
        return redirect('/backend/tabel32')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel32::findOrFail($id)->delete();

        return redirect('/backend/tabel32')->with('error-message', 'Your data was deleted');
    }
}
