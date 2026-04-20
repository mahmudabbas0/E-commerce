<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Services\Dashboard\AdminService;
use App\Services\Dashboard\RoleService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $adminService;
    protected $roleService;

    public function __construct(AdminService $adminService, RoleService $roleService)
    {
        $this->adminService = $adminService;
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = $this->adminService->getAdmins();
        return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->roleService->getAllRoles();


        return view('dashboard.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $data = $request->only(['name', 'email', 'password', 'status', 'role_id']);
        $admin = $this->adminService->storeAdmin($data);
        if (!$admin) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.admins.index')->with('success', __('dashboard.added-successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = $this->adminService->getAdmin($id);
        if (!$admin) {
            return redirect()->route('dashboard.admins.index')->with('error', __('dashboard.something-went-wrong'));
        }
        return view('dashboard.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = $this->adminService->getAdmin($id);
        if (!$admin) {
            return redirect()->route('dashboard.admins.index')->with('error', __('dashboard.something-went-wrong'));
        }
        $roles = $this->roleService->getAllRoles();
        return view('dashboard.admins.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $request, string $id)
    {
        $data = $request->only(['name', 'email', 'status', 'role_id']);
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        if (!$this->adminService->updateAdmin($data, $id)) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }

        return redirect()->route('dashboard.admins.index')->with('success', __('dashboard.updated-successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = $this->adminService->destroyAdmin($id);
        if (!$admin) {
            return redirect()->route('dashboard.admins.index')->with('error', __('dashboard.something-went-wrong'));
        }

        return redirect()->route('dashboard.admins.index')->with('success', __('dashboard.deleted-successfully'));
    }

    public function changeStatus(string $id)
    {

    }
}
