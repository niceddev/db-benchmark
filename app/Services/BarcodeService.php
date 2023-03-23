<?php

namespace App\Services;

use Illuminate\Support\Str;

class BarcodeService
{
    public function generate(): string
    {
        return Str::random(30);
    }

}
