<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'dni' => 'required|string|unique:users',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'role' => 'required|string|exists:roles,id',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'dni' => $request->dni,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        $rol = Role::find($request->role);
        $user->assignRole($rol->name);
        return redirect()->route('admin.users.index')->with('swal', [
            'icon' => 'success',
            'title' => 'Usuario creado exitosamente',
            'text' => 'El usuario ha sido creado correctamente.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'dni' => 'required|string|unique:users,dni,' . $user->id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'role' => 'required|string|exists:roles,id',
        ]);
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'dni' => $request->dni,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $rol = Role::find($request->role);
        $user->syncRoles([$rol->name]);

        return redirect()->route('admin.users.index')->with('swal', [
            'icon' => 'success',
            'title' => 'Usuario actualizado exitosamente',
            'text' => 'Los datos del usuario han sido actualizados correctamente.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('swal', [
            'icon' => 'success',
            'title' => 'Usuario eliminado exitosamente',
            'text' => 'El usuario ha sido eliminado correctamente.',
        ]);
    }
}
