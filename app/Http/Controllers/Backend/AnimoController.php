<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bidang1\Animo;

class AnimoController extends BackendController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animo = Animo::latest()->orderBy('tahun','asc')->paginate(15);
        $animoCount = Animo::count();
        return view('backend.bidang1.animo.index', compact('animo','animoCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Animo $animo)
    {
        return view('backend.bidang1.animo.create', compact('animo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Animo::create($request->all());

        return redirect('/backend/animo')->with('message', 'Your data was created successfully!');
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
        $animo = Animo::findOrFail($id);
        return view("backend.bidang1.animo.edit", compact('animo'));
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
        $animo = Animo::findOrFail($id);
        $animo->update($request->all());
        return redirect('/backend/animo')->with('message', 'Your animo was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animo::findOrFail($id)->delete();

        return redirect('/backend/animo')->with('error-message', 'Your animo was deleted');
    }
}
