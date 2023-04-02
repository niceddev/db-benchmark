<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $orders = [];
        for ($i = 0; $i < 1000000; $i++) {
            $orders[] = [
                'local_uuid' => Str::uuid(),
                'client' => $faker->name,
                'title' => $faker->text
            ];
        }

        foreach (array_chunk($orders, 10000) as $orderChunk) {
            Order::insert($orderChunk);
        }
    }

}
