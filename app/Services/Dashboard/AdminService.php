<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\AdminRepository;
use App\Repositories\Dashboard\RoleRepository;
use Illuminate\Http\Request;

class AdminService
{
    protected $adminRepository;

    public function __construct(AdminRepository $adminRepository,RoleRepository $roleRepository){
        $this->adminRepository = $adminRepository;
    }

    public function getAdmins(){
        return $this->adminRepository->getAdmins();
    }

    public function getAdminsByRole(string $role){
        return $this->adminRepository->getAdminsByRole($role);
    }

    public function getAdmin($id){
        $admin = $this->adminRepository->getAdmin($id);
        if(!$admin){
            return false;
        }
        return $admin;
    }

    public function storeAdmin($data){

      return  $this->adminRepository->storeAdmin($data);

    }

    public function updateAdmin($data,$id){

        $admin = $this->adminRepository->getAdmin($id);
        if(!$admin){
            return abort(404);
        }
        $admin = $this->adminRepository->updateAdmin($data,$admin);
        if(!$admin){
            return false;
        }
        return $admin;
    }

    public function destroyAdmin($id){
        $admin = $this->adminRepository->getAdmin($id);
        if(!$admin){
            return abort(404);
        }
        $admin = $this->adminRepository->destroyAdmin($admin);
        return $admin;

    }

    public function changeStatus($id,$status){
        $admin = $this->adminRepository->getAdmin($id);
        if(!$admin){
            return abort(404);
        }
        $admin = $this->adminRepository->changeStatus($admin,$status);
        return $admin;

    }

}
