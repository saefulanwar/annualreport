<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang2\Tabel228;
class Tabel228Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel228 = Tabel228::latest()->orderBy('tahun','asc')->paginate(15);
        $tabel228Count = Tabel228::count();
        return view('backend.bidang2.tabel228.index', compact('tabel228','tabel228Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel228 $tabel228)
    {
        return view('backend.bidang2.tabel228.create', compact('tabel228'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel228::create($request->all());

        return redirect('/backend/tabel228')->with('message', 'Your data was created successfully!');
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
        $tabel228 = Tabel228::findOrFail($id);
        return view("backend.bidang2.tabel228.edit", compact('tabel228'));
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
        $tabel228 = Tabel228::findOrFail($id);
        $tabel228->update($request->all());
        return redirect('/backend/tabel228')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel228::findOrFail($id)->delete();

        return redirect('/backend/tabel228')->with('error-message', 'Your data was deleted');
    }
}
