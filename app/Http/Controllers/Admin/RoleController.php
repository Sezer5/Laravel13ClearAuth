<?php

namespace App\Http\Controllers\Admin; // 'Admin' eklediğinden emin ol

use App\Http\Controllers\Controller; // Base controller'ı içe aktar
use App\Http\Requests\AddRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.role.index')->with([
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddRoleRequest $request)
    {
        if($request->validated()){
            $data=$request->validated();
            Role::create($data);
            return redirect()->route('role.index')->with([
                'success' => 'Role added successfully'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit')->with([
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        if($request->validated()){
            $data=$request->validated();
            $role->update($data);
            return redirect()->route('role.index')->with([
                'success' => 'Role is updated successfully'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index')->with([
            'success' => 'Role deleted successfuly'
        ]);
    }
}
