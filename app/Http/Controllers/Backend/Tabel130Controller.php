<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel130;
class Tabel130Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel130 = Tabel130::latest()->paginate(15);
        $tabel130Count = Tabel130::count();
        return view('backend.bidang1.tabel130.index', compact('tabel130','tabel130Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel130 $tabel130)
    {
        return view('backend.bidang1.tabel130.create', compact('tabel130'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel130::create($request->all());

        return redirect('/backend/tabel130')->with('message', 'Your data was created successfully!');
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
        $tabel130 = Tabel130::findOrFail($id);
        return view("backend.bidang1.tabel130.edit", compact('tabel130'));
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
        $tabel130 = Tabel130::findOrFail($id);
        $tabel130->update($request->all());
        return redirect('/backend/tabel130')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel130::findOrFail($id)->delete();

        return redirect('/backend/tabel130')->with('error-message', 'Your data was deleted');
    }
}
