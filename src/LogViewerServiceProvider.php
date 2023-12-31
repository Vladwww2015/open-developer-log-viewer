<?php

namespace OpenDeveloper\Developer\LogViewer;

use Illuminate\Support\ServiceProvider;

class LogViewerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'open-developer-logs');

        LogViewer::boot();
    }
}
