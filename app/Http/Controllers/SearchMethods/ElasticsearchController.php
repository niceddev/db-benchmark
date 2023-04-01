<?php

namespace App\Http\Controllers\SearchMethods;

class ElasticsearchController
{
    public function index()
    {
        return view('search-methods.elasticsearch');
    }
}
