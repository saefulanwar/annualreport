<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel141;

class Tabel141Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel141 = Tabel141::latest()->paginate(15);
        $tabel141Count = Tabel141::count();
        return view('backend.bidang1.tabel141.index', compact('tabel141','tabel141Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel141 $tabel141)
    {
        return view('backend.bidang1.tabel141.create', compact('tabel141'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel141::create($request->all());

        return redirect('/backend/tabel141')->with('message', 'Your data was created successfully!');
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
        $tabel141 = Tabel141::findOrFail($id);
        return view("backend.bidang1.tabel141.edit", compact('tabel141'));
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
        $tabel141 = Tabel141::findOrFail($id);
        $tabel141->update($request->all());
        return redirect('/backend/tabel141')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel141::findOrFail($id)->delete();

        return redirect('/backend/tabel141')->with('error-message', 'Your data was deleted');
    }
}
