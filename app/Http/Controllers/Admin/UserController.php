<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserCreateRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    private UserService $userService;
    public function __construct()
    {
        $this->userService = new UserService();
        $this->middleware('gate:show-users-list')->only(['index' , 'create']);
    }

    public function index()
    {
        $users = User::latest()->paginate(3);
        return view('admin.users.index' , compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreateRequest $request)
    {
        //validate
        $validData = $request->validated();
        //insert
        $this->userService->insertUser($validData);
        //redirect
        Alert::toast("کاربر جدید با موفقیت افزوده شد." , "success");
        return redirect()->route('dashboard.users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit' , compact('user'));
    }

    public function update(UserUpdateRequest $request , $id)
    {
        $validData = $request->validated();
        $user = User::findOrFail($id);
        $this->userService->updateUser($validData , $user);
        Alert::toast("کاربر جدید با موفقیت بروزرسانی شد." , "success");
        return redirect()->route('dashboard.users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::toast('کاربر حذف شد.' , 'success');
        return back();
    }
}
