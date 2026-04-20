<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\RoleRepository;
use Illuminate\Http\Request;

class RoleService
{
    protected $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;

    }

    public function getAllRoles()
    {
        return $this->roleRepository->getAllRoles();
    }

    public function findRole($id)
    {
        return $this->roleRepository->findRole($id);
    }

    public function createRole(Request $request)
    {
        return $this->roleRepository->createRole($request);
    }

    public function updateRole($id, Request $request)
    {
        return $this->roleRepository->updateRole($id, $request);
    }

    public function deleteRole($id)
    {
        $role = $this->roleRepository->findRole($id);
        if (!$role) {
            return false;
        }
        if ($role->admins()->count() > 0) {
            throw new \Exception(__('dashboard.role-has-users-error') ?? 'Cannot delete role with assigned admins.');
        }
        return $this->roleRepository->deleteRole($id);
    }
}
