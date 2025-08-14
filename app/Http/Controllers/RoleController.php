<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // examples:
        $this->middleware(['permission:role-list | role-create | role-edit |role-delete'],["only"=>["index"]]);
        $this->middleware(['permission:role-create'],["only"=>["create","store"]]);
        
    }
    public function index()
    {
        $roles = Role::get();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create(["name" => $request->name]);
        $role->syncPermissions([$request->permissions]);
        return redirect()->route("roles.index")->with('success', 'role created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::where('id', $id)
            ->first();
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::where('id', $id)
            ->first();
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update['name'] = $request->name;
        $role = Role::where('id', $id)
            ->first();
        $query = Role::where('id', $id)
            ->update($update);
        $role->syncPermissions([$request->permissions]);
        return redirect()->route("roles.index")->with('success', 'role updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
