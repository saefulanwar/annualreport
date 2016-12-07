<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel147;

class Tabel147Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel147 = Tabel147::latest()->paginate(15);
        $tabel147Count = Tabel147::count();
        return view('backend.bidang1.tabel147.index', compact('tabel147','tabel147Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel147 $tabel147)
    {
        return view('backend.bidang1.tabel147.create', compact('tabel147'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel147::create($request->all());

        return redirect('/backend/tabel147')->with('message', 'Your data was created successfully!');
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
        $tabel147 = Tabel147::findOrFail($id);
        return view("backend.bidang1.tabel147.edit", compact('tabel147'));
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
        $tabel147 = Tabel147::findOrFail($id);
        $tabel147->update($request->all());
        return redirect('/backend/tabel147')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel147::findOrFail($id)->delete();

        return redirect('/backend/tabel147')->with('error-message', 'Your data was deleted');
    }
}
