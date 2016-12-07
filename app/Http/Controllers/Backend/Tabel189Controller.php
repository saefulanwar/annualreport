<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel189;

class Tabel189Controller extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel189 = Tabel189::latest()->paginate(15);
        $tabel189Count = Tabel189::count();
        return view('backend.bidang1.tabel189.index', compact('tabel189','tabel189Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel189 $tabel189)
    {
        return view('backend.bidang1.tabel189.create', compact('tabel189'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel189::create($request->all());

        return redirect('/backend/tabel189')->with('message', 'Your data was created successfully!');
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
        $tabel189 = Tabel189::findOrFail($id);
        return view("backend.bidang1.tabel189.edit", compact('tabel189'));
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
        $tabel189 = Tabel189::findOrFail($id);
        $tabel189->update($request->all());
        return redirect('/backend/tabel189')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel189::findOrFail($id)->delete();

        return redirect('/backend/tabel189')->with('error-message', 'Your data was deleted');
    }
}
