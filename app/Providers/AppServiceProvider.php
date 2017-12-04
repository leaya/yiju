<?php

namespace App\Providers;

use App\Observers\PostObserver;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Libraries\EsEngine;
use Laravel\Scout\EngineManager;
use Elasticsearch\ClientBuilder as ElasticBuilder;
use TCG\Voyager\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('zh');
        Post::Observe(PostObserver::class);
        resolve(EngineManager::class)->extend('elasticsearch', function($app) {
            return new EsEngine(ElasticBuilder::create()
                ->setHosts(config('scout.elasticsearch.hosts'))
                ->build(),
                config('scout.elasticsearch.index')
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
