<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Permission;

class PermissionController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::latest()->paginate(15);
        $permissionCount = Permission::count();
        return view('backend.config.permissions.index', compact('permission','permissionCount')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Permission $permission)
    {
         return view('backend.config.permissions.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editUser = new Permission();
        $editUser->name         = $request->name;
        $editUser->display_name = $request->display_name; // optional
        // Allow a user to...
        $editUser->description  = $request->description; // optional
        $editUser->save();

        return redirect('/backend/permission')->with('message', 'Your data was created successfully!');
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
        $permission= Permission::findOrFail($id);
        return view('backend.config.permissions.edit', compact('permission'));
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
        $editUser = Permission::findOrFail($id);
        $editUser->name = $request->name;
        $editUser->display_name = $request->display_name; // optional
        $editUser->description  = $request->description; // optional
        $editUser->update();
        return redirect('/backend/permission')->with('warning-message', 'Your permission was updated successfully!');
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
        Permission::findOrFail($id)->delete();

        return redirect('/backend/permission')->with('error-message', 'Your permission was deleted');
    }
}
