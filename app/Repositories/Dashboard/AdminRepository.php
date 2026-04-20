<?php

namespace App\Repositories\Dashboard;

use App\Models\Admin;

class AdminRepository
{
    public function getAdmins(){
        return Admin::select('id','name','email','role_id','status','created_at')->paginate(6);
    }

    public function getAdminsByRole(string $role){
        return Admin::where('role_id', $role)->select('id','name','email','role_id','status','created_at')->paginate(6);
    }

    public function getAdmin($id){
        return Admin::find($id);
    }

    public function storeAdmin($data){

     return Admin::create($data);
    }

    public function updateAdmin($data,$admin){
        $admin->update($data);
        return $admin;
    }

    public function destroyAdmin($admin){
        return $admin->delete();
    }

    public function changeStatus($admin,$status){

        return $admin->update([
            'status' => $status,
        ]);
    }


}
