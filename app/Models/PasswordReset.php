<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    protected $table = "custome_reset_password";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class , 'email' , 'email');
    }

}
