<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel25;
class Tabel25Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel25 = Tabel25::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel25Count = Tabel25::count();
        return view('backend.bidang2.tabel25.index', compact('tabel25','tabel25Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel25 $tabel25)
    {
        return view('backend.bidang2.tabel25.create', compact('tabel25'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel25::create($request->all());

        return redirect('/backend/tabel25')->with('message', 'Your data was created successfully!');
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
        $tabel25 = Tabel25::findOrFail($id);
        return view("backend.bidang2.tabel25.edit", compact('tabel25'));
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
        $tabel25 = Tabel25::findOrFail($id);
        $tabel25->update($request->all());
        return redirect('/backend/tabel25')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel25::findOrFail($id)->delete();

        return redirect('/backend/tabel25')->with('error-message', 'Your data was deleted');
    }
}
