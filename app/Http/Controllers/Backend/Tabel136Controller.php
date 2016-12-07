<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel136;

class Tabel136Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel136 = Tabel136::latest()->paginate(15);
        $tabel136Count = Tabel136::count();
        return view('backend.bidang1.tabel136.index', compact('tabel136','tabel136Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel136 $tabel136)
    {
        return view('backend.bidang1.tabel136.create', compact('tabel136'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel136::create($request->all());

        return redirect('/backend/tabel136')->with('message', 'Your data was created successfully!');
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
        $tabel136 = Tabel136::findOrFail($id);
        return view("backend.bidang1.tabel136.edit", compact('tabel136'));
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
        $tabel136 = Tabel136::findOrFail($id);
        $tabel136->update($request->all());
        return redirect('/backend/tabel136')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel136::findOrFail($id)->delete();

        return redirect('/backend/tabel136')->with('error-message', 'Your data was deleted');
    }
}
