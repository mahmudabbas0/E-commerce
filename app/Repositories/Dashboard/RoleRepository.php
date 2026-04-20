<?php

namespace App\Repositories\Dashboard;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleRepository
{
    public function getAllRoles()
    {
        return Role::latest()->get();
    }

    public function createRole(RoleRequest $request)
    {
        return Role::create([
            'role' => $request->role,
            'permissions' => $request->permissions,
        ]);
    }

    public function findRole($id)
    {
        return Role::findOrFail($id);
    }

    public function updateRole($id, Request $request)
    {
        $role = $this->findRole($id);
        $role->update([
            'role' => $request->role,
            'permissions' => $request->permissions,
        ]);
        return $role;
    }

    public function deleteRole($id)
    {
        $role = $this->findRole($id);
        return $role->delete();
    }
}
