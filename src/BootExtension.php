<?php

namespace OpenDeveloper\Developer\LogViewer;

use OpenDeveloper\Developer\Developer;

trait BootExtension
{
    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        static::registerRoutes();

        Developer::extend('log-viewer', __CLASS__);
    }

    /**
     * Register routes for open-developer.
     *
     * @return void
     */
    protected static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            $router->get('logs', 'OpenDeveloper\Developer\LogViewer\LogController@index')->name('log-viewer-index');
            $router->get('logs/{file}', 'OpenDeveloper\Developer\LogViewer\LogController@index')->name('log-viewer-file');
            $router->get('logs/{file}/tail', 'OpenDeveloper\Developer\LogViewer\LogController@tail')->name('log-viewer-tail');
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        parent::createMenu('Log viewer', 'logs', 'icon-exclamation-triangle');

        parent::createPermission('Logs', 'ext.log-viewer', 'logs*');
    }
}
