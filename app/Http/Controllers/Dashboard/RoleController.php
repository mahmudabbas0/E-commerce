<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Services\Dashboard\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;

    }
    public function index()
    {
        $roles = $this->roleService->getAllRoles();
        return view('dashboard.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $role = $this->roleService->createRole($request);
        if (!$role) {
            return back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.roles.index')->with('success', __('dashboard.added-successfully'));
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
    public function edit(string $id)
    {
        $role = $this->roleService->findRole($id);
        return view('dashboard.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, string $id)
    {
        $role = $this->roleService->updateRole($id, $request);
        if (!$role) {
            return back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.roles.index')->with('success', __('dashboard.updated-successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $role = $this->roleService->deleteRole($id);
            if (!$role) {
                return back()->with('error', __('dashboard.something-went-wrong'));
            }
            return redirect()->route('dashboard.roles.index')->with('success', __('dashboard.deleted-successfully'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
