<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        return Role::create($request->validated());
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        $role->update($request->validated());

        return $role;
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return response()->json();
    }
}
