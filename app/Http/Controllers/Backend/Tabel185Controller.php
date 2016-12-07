<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Tabel185;

class Tabel185Controller extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel185 = Tabel185::latest()->paginate(15);
        $tabel185Count = Tabel185::count();
        return view('backend.bidang1.tabel185.index', compact('tabel185','tabel185Count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tabel185 $tabel185)
    {
        return view('backend.bidang1.tabel185.create', compact('tabel185'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tabel185::create($request->all());

        return redirect('/backend/tabel185')->with('message', 'Your data was created successfully!');
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
        $tabel185 = Tabel185::findOrFail($id);
        return view("backend.bidang1.tabel185.edit", compact('tabel185'));
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
        $tabel185 = Tabel185::findOrFail($id);
        $tabel185->update($request->all());
        return redirect('/backend/tabel185')->with('message', 'Your data was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tabel185::findOrFail($id)->delete();

        return redirect('/backend/tabel185')->with('error-message', 'Your data was deleted');
    }
}
