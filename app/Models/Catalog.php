<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Catalog extends Model implements Sitemapable
{
    protected $fillable = [
        'title',
        'description',
        'manufacturer',
        'model',
        'year',
        'price',
        'picture',
    ];

    public function toSitemapTag(): Url|string|array
    {
        return route('catalog.show', $this);
    }
}
