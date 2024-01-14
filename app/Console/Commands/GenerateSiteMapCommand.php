<?php

namespace App\Console\Commands;

use App\Models\Catalog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSiteMapCommand extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Command description';

    public function handle(): void
    {
        Sitemap::create()
            ->add(route('catalog'))
            ->add(route('filter'))
            ->add(Catalog::all())
            ->writeToFile(public_path('sitemap.xml'));
    }
}
