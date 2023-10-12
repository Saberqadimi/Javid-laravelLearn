<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait generateCharacterRand
{
    protected function generateToken(): string
    {
        return Str::random(64);
    }

}
