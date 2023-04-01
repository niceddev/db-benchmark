<?php

namespace App\Enums;

enum SearchMethod: string
{
    case MEILISEARCH = 'meilisearch';
    case ELASTICSEARCH = 'elasticsearch';
    case FULLTEXTSEARCH = 'fulltextsearch';
    case MANTICORESEARCH = 'manticoresearch';
}
