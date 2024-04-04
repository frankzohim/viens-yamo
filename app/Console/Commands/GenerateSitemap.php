<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\SitemapGenerator;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url."/api/announces");
        $allAds = json_decode((string) $response->getBody(), true)['data'];


        $sitemapGenerator=SitemapGenerator::create('https://viens-yamo.com')->getSitemap();
        $sitemapGenerator->add(Url::create('/')->setPriority(1));
        foreach($allAds as $ads){
            $sitemapGenerator->add(Url::create("/ads/{$ads['user']['username']}/{$ads['slug']}")->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        }
        $sitemapGenerator->writeToFile(public_path('sitemap.xml'));
        return 'Sitemap generated';
    }
}
