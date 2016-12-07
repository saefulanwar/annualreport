<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel225;

class Tabel225Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel225 = Tabel225::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel225Count = Tabel225::count();
        return view('backend.bidang2.tabel225.index', compact('tabel225','tabel225Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel225 $tabel225)
    {
        return view('backend.bidang2.tabel225.create', compact('tabel225'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel225::create($request->all());

        return redirect('/backend/tabel225')->with('message', 'Your data was created successfully!');
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
        $tabel225 = Tabel225::findOrFail($id);
        return view("backend.bidang2.tabel225.edit", compact('tabel225'));
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
        $tabel225 = Tabel225::findOrFail($id);
        $tabel225->update($request->all());
        return redirect('/backend/tabel225')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel225::findOrFail($id)->delete();

        return redirect('/backend/tabel225')->with('error-message', 'Your data was deleted');
    }
}
