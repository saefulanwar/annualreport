<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang4\Tabel47;
class Tabel47Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel47 = Tabel47::latest()->paginate(15);
        $tabel47Count = Tabel47::count();
        return view('backend.bidang4.tabel47.index', compact('tabel47','tabel47Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel47 $tabel47)
    {
        return view('backend.bidang4.tabel47.create', compact('tabel47'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel47::create($request->all());

        return redirect('/backend/tabel47')->with('message', 'Your data was created successfully!');
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
        $tabel47 = Tabel47::findOrFail($id);
        return view("backend.bidang4.tabel47.edit", compact('tabel47'));
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
        $tabel47 = Tabel47::findOrFail($id);
        $tabel47->update($request->all());
        return redirect('/backend/tabel47')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel47::findOrFail($id)->delete();

        return redirect('/backend/tabel47')->with('error-message', 'Your data was deleted');
    }
}
