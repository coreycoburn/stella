<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class SqliteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Sqlite Database.
     *
     * @return void
     */
    public function boot()
    {
        $dbPath = config('database.connections.sqlite.database');

        if (! File::exists($dbPath)) {
            File::put($dbPath, '');
            Artisan::call('migrate --force');
        }
    }
}
