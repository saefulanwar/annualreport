<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang3\Tabel37;

class Tabel37Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel37 = Tabel37::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel37Count = Tabel37::count();
        return view('backend.bidang3.tabel37.index', compact('tabel37','tabel37Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel37 $tabel37)
    {
        return view('backend.bidang3.tabel37.create', compact('tabel37'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel37::create($request->all());

        return redirect('/backend/tabel37')->with('message', 'Your data was created successfully!');
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
        $tabel37 = Tabel37::findOrFail($id);
        return view("backend.bidang3.tabel37.edit", compact('tabel37'));
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
        $tabel37 = Tabel37::findOrFail($id);
        $tabel37->update($request->all());
        return redirect('/backend/tabel37')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel37::findOrFail($id)->delete();

        return redirect('/backend/tabel37')->with('error-message', 'Your data was deleted');
    }
}
