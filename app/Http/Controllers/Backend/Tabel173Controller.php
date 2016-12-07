<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel173;

class Tabel173Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel173 = Tabel173::latest()->paginate(15);
        $tabel173Count = Tabel173::count();
        return view('backend.bidang1.tabel173.index', compact('tabel173','tabel173Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel173 $tabel173)
    {
        return view('backend.bidang1.tabel173.create', compact('tabel173'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel173::create($request->all());

        return redirect('/backend/tabel173')->with('message', 'Your data was created successfully!');
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
        $tabel173 = Tabel173::findOrFail($id);
        return view("backend.bidang1.tabel173.edit", compact('tabel173'));
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
        $tabel173 = Tabel173::findOrFail($id);
        $tabel173->update($request->all());
        return redirect('/backend/tabel173')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel173::findOrFail($id)->delete();

        return redirect('/backend/tabel173')->with('error-message', 'Your data was deleted');
    }
}
