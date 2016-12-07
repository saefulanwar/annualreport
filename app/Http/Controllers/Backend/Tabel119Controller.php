<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel119;

class Tabel119Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel119 = Tabel119::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel119Count = Tabel119::count();
        return view('backend.bidang1.tabel119.index', compact('tabel119','tabel119Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel119 $tabel119)
    {
        return view('backend.bidang1.tabel119.create', compact('tabel119'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel119::create($request->all());

        return redirect('/backend/tabel119')->with('message', 'Your data was created successfully!');
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
        $tabel119 = Tabel119::findOrFail($id);
        return view("backend.bidang1.tabel119.edit", compact('tabel119'));
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
        $tabel119 = Tabel119::findOrFail($id);
        $tabel119->update($request->all());
        return redirect('/backend/tabel119')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel119::findOrFail($id)->delete();

        return redirect('/backend/tabel119')->with('error-message', 'Your data was deleted');
    }
}
