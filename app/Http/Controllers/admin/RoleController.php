<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        // Formatear el nombre del rol para que la primera letra de cada palabra sea mayúscula
        $request->merge(['name' => ucwords(strtolower($request->name))]);
        Role::create($request->only('name'));
        return redirect()->route('admin.roles.index')->with('swal', [
            'icon' => 'success',
            'title' => '¡Rol creado exitosamente!',
            'text' => 'El nuevo rol ha sido creado.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);
        // Formatear el nombre del rol para que la primera letra de cada palabra sea mayúscula
        $request->merge(['name' => ucwords(strtolower($request->name))]);
        $role->update($request->only('name'));
        return redirect()->route('admin.roles.edit', $role)->with('swal', [
            'icon' => 'success',
            'title' => '¡Rol actualizado exitosamente!',
            'text' => 'El rol ha sido actualizado.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
