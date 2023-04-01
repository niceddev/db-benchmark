<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;

class SearcherController
{
    public function index(string $method, OrderRequest $orderRequest)
    {
        $orders = ($orderRequest->input('query') !== null)
            ? Order::search($orderRequest->input('query'))->paginate()
            : Order::paginate();

        return view('pages.search-method', compact('method','orders' ));
    }
}
