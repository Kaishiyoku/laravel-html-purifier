<?php

namespace Kaishiyoku\HtmlPurifier;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class HtmlPurifierServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
     * @return void
     */
    public function boot(Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('html_purifier', function () {
            return new HtmlPurifier();
        });
    }
}