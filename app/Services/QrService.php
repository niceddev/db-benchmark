<?php

namespace App\Services;

use Illuminate\Support\Str;

class QrService
{
    public function generate(): string
    {
        return Str::random(100);
    }
}
