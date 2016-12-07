<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel178;

class Tabel178Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel178 = Tabel178::latest()->paginate(15);
        $tabel178Count = Tabel178::count();
        return view('backend.bidang1.tabel178.index', compact('tabel178','tabel178Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel178 $tabel178)
    {
        return view('backend.bidang1.tabel178.create', compact('tabel178'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel178::create($request->all());

        return redirect('/backend/tabel178')->with('message', 'Your data was created successfully!');
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
        $tabel178 = Tabel178::findOrFail($id);
        return view("backend.bidang1.tabel178.edit", compact('tabel178'));
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
        $tabel178 = Tabel178::findOrFail($id);
        $tabel178->update($request->all());
        return redirect('/backend/tabel178')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel178::findOrFail($id)->delete();

        return redirect('/backend/tabel178')->with('error-message', 'Your data was deleted');
    }
}
