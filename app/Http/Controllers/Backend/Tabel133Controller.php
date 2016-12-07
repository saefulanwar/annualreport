<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel133;

class Tabel133Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel133 = Tabel133::latest()->paginate(15);
        $tabel133Count = Tabel133::count();
        return view('backend.bidang1.tabel133.index', compact('tabel133','tabel133Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel133 $tabel133)
    {
        return view('backend.bidang1.tabel133.create', compact('tabel133'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel133::create($request->all());

        return redirect('/backend/tabel133')->with('message', 'Your data was created successfully!');
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
        $tabel133 = Tabel133::findOrFail($id);
        return view("backend.bidang1.tabel133.edit", compact('tabel133'));
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
        $tabel133 = Tabel133::findOrFail($id);
        $tabel133->update($request->all());
        return redirect('/backend/tabel133')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel133::findOrFail($id)->delete();

        return redirect('/backend/tabel133')->with('error-message', 'Your data was deleted');
    }
}
