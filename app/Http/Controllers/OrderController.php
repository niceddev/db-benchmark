<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController
{
    public function index()
    {
        $orders = Order::paginate();

        return view('home', compact('orders'));
    }

    public function import(Request $request)
    {
        $path = $request->file('file')->store('temp');

        $rows = array_map('str_getcsv', file(storage_path('app/' . $path)));
        $csv = array();
        foreach ($rows as $row) {
            $csv[] = combine_arr(['id', 'local_uuid', 'client', 'title'], $row);
        }

        foreach (array_chunk($csv, 200000) as $chunk) {
            foreach ($chunk as $data) {
                Order::insert($data);
            }
        }

        return redirect()->back();
    }

}
