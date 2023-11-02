<?php

namespace Modules\Permission\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Permission;
use Modules\Permission\Entities\Role;
use Modules\Permission\Http\Requests\RoleRequest;
use Modules\Permission\Http\Requests\RoleRequestUpdate;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate(5);

        return view("permission::roles.index" , compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::latest()->get();
        return view('permission::roles.create' , compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $request->validated();
        $role = Role::create([
            'name' => $request->name,
            'label' => $request->label
        ]);
        $role->permissions()->sync($request->permissions);
        Alert::toast('مقام با موفقیت افزوده شد.' , 'success');
        return redirect('/dashboard/roles');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::latest()->get();
        return view('permission::roles.edit' , compact('role' , 'permissions'));
    }

    public function update(RoleRequestUpdate $request , $id)
    {
        $role = Role::find($id);
        $role->update([
           'name' => $request->name ?? $role->name,
           'label' => $request->label ?? $role->label
        ]);
        $role->permissions()->sync($request->permissions);
        Alert::toast('مقام با موفقیت بروزرسانی شد.' , 'success');

        return redirect('dashboard/roles');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        Alert::toast('مقام با موفقیت حذف شد.' , 'success');

        return redirect('/dashboard/roles');
    }
}
