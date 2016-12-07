<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel117;

class Tabel117Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel117 = Tabel117::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel117Count = Tabel117::count();
        return view('backend.bidang1.tabel117.index', compact('tabel117','tabel117Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel117 $tabel117)
    {
        return view('backend.bidang1.tabel117.create', compact('tabel117'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel117::create($request->all());

        return redirect('/backend/tabel117')->with('message', 'Your data was created successfully!');
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
        $tabel117 = Tabel117::findOrFail($id);
        return view("backend.bidang1.tabel117.edit", compact('tabel117'));
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
        $tabel117 = Tabel117::findOrFail($id);
        $tabel117->update($request->all());
        return redirect('/backend/tabel117')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel117::findOrFail($id)->delete();

        return redirect('/backend/tabel117')->with('error-message', 'Your data was deleted');
    }
}
