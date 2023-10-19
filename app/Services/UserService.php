<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function insertUser($data): void
    {
        DB::table('users')->insert([
            'name' => $data['full_name'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'created_at' => now()
        ]);
    }

    public function updateUser($data, $user)
    {
        DB::table('users')
            ->whereEmail($user->email)
            ->update([
            'name' => $data['full_name'] ?? $user->name,
            'email' => $data['email'] ?? $user->email,
            'password' => $data['password'] ?  Hash::make($data['password']) : $user->password,
            'type' => $data['type'] ?? $user->type,
        ]);

    }
}
