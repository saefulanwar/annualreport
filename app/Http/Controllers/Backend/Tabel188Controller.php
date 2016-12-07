<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel88;

class Tabel188Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel188 = Tabel188::latest()->paginate(15);
        $tabel188Count = Tabel188::count();
        return view('backend.bidang1.tabel188.index', compact('tabel188','tabel188Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel188 $tabel188)
    {
        return view('backend.bidang1.tabel188.create', compact('tabel188'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel188::create($request->all());

        return redirect('/backend/tabel188')->with('message', 'Your data was created successfully!');
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
        $tabel188 = Tabel188::findOrFail($id);
        return view("backend.bidang1.tabel188.edit", compact('tabel188'));
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
        $tabel188 = Tabel188::findOrFail($id);
        $tabel188->update($request->all());
        return redirect('/backend/tabel188')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel188::findOrFail($id)->delete();

        return redirect('/backend/tabel188')->with('error-message', 'Your data was deleted');
    }
}
