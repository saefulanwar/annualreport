<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Role;
class RoleController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::latest()->paginate(15);
        $roleCount = Role::count();
        return view('backend.config.roles.index', compact('role','roleCount')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
         return view('backend.config.roles.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editUser = new Role();
        $editUser->name         = $request->name;
        $editUser->display_name = $request->display_name; // optional
        // Allow a user to...
        $editUser->description  = $request->description; // optional
        $editUser->save();

        return redirect('/backend/role')->with('message', 'Your data was created successfully!');
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
        $role= role::findOrFail($id);
        return view('backend.config.roles.edit', compact('role'));
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
        $editUser = Role::findOrFail($id);
        $editUser->name = $request->name;
        $editUser->display_name = $request->display_name; // optional
        $editUser->description  = $request->description; // optional
        $editUser->update();
        return redirect('/backend/role')->with('warning-message', 'Your role was updated successfully!');
        //dd($editUser);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        role::findOrFail($id)->delete();

        return redirect('/backend/role')->with('error-message', 'Your role was deleted');
    }
}
