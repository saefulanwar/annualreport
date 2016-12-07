<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel41;

class Tabel41Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel41 = Tabel41::latest()->paginate(15);
        $tabel41Count = Tabel41::count();
        return view('backend.bidang4.tabel41.index', compact('tabel41','tabel41Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel41 $tabel41)
    {
        return view('backend.bidang4.tabel41.create', compact('tabel41'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel41::create($request->all());

        return redirect('/backend/tabel41')->with('message', 'Your data was created successfully!');
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
        $tabel41 = Tabel41::findOrFail($id);
        return view("backend.bidang4.tabel41.edit", compact('tabel41'));
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
        $tabel41 = Tabel41::findOrFail($id);
        $tabel41->update($request->all());
        return redirect('/backend/tabel41')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel41::findOrFail($id)->delete();

        return redirect('/backend/tabel41')->with('error-message', 'Your data was deleted');
    }
}
