<?php

namespace App\Http\Controllers\SearchMethods;

class MeilisearchController
{
    public function index()
    {
        return view('search-methods.meilisearch');
    }
}
