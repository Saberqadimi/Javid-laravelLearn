<?php

namespace Modules\Permission\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Permission;
use Modules\Permission\Http\Requests\PermissionRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::latest()->paginate(5);

        return view("permission::permissions.index" , compact('permissions'));
    }

    public function create()
    {
        return view('permission::permissions.create');
    }

    public function store(PermissionRequest $request)
    {
        $request->validated();
        Permission::create([
            'name' => $request->name,
            'label' => $request->label
        ]);
        Alert::toast('دسترسی با موفقیت افزوده شد.' , 'success');
        return redirect('/dashboard/permissions');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('permission::permissions.edit' , compact('permission'));
    }

    public function update(PermissionRequest $request , $id)
    {
        $permission = Permission::find($id);
        $permission->update([
            'name' => $request->name ?? $permission->name,
            'label' => $request->label ?? $permission->label
        ]);
        Alert::toast('دسترسی با موفقیت بروزرسانی شد.' , 'success');

        return redirect('dashboard/permissions');
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        Alert::toast('دسترسی با موفقیت حذف شد.' , 'success');

        return redirect('/dashboard/permissions');
    }
}
