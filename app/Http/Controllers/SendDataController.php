<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class SendDataController
{
    public function send()
    {
        $data = Data::create([
            'local_uuid' => Str::uuid(),
            'message'    => Str::random(20),
        ]);

        return JsonResource::make($data);
    }

}
