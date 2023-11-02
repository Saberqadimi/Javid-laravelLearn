<?php

namespace Modules\Permission\Http\Controllers\UserPermission;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Permission;
use Modules\Permission\Entities\Role;
use RealRashid\SweetAlert\Facades\Alert;

class UserPermissionController extends Controller
{
    public function templateAddPermission($user_id)
    {
        $user = User::with('permissions' , 'roles')->find($user_id);
        $permissions = Permission::latest()->get();
        $roles = Role::latest()->get();
        return view('permission::userPermission.create' , compact('user' , 'permissions' , 'roles'));
    }

    public function addPermission(Request $request , $user_id)
    {
        $user = User::find($user_id);
        $user->permissions()->sync($request->permissions);
        $user->roles()->sync($request->roles);
        Alert::toast('سطوح دسترسی برای کاربر موردنظر اضافه شد.' , 'success');

        return redirect('dashboard/users');
    }
}
