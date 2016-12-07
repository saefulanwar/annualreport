<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel135;

class Tabel135Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel135 = Tabel135::latest()->paginate(15);
        $tabel135Count = Tabel135::count();
        return view('backend.bidang1.tabel135.index', compact('tabel135','tabel135Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel135 $tabel135)
    {
        return view('backend.bidang1.tabel135.create', compact('tabel135'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel135::create($request->all());

        return redirect('/backend/tabel135')->with('message', 'Your data was created successfully!');
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
        $tabel135 = Tabel135::findOrFail($id);
        return view("backend.bidang1.tabel135.edit", compact('tabel135'));
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
        $tabel135 = Tabel135::findOrFail($id);
        $tabel135->update($request->all());
        return redirect('/backend/tabel135')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel135::findOrFail($id)->delete();

        return redirect('/backend/tabel135')->with('error-message', 'Your data was deleted');
    }
}
