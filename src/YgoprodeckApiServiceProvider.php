<?php

namespace BCleverly\YgoprodeckApi;

use BCleverly\YgoprodeckApi\Commands\YgoprodeckApiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YgoprodeckApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ygoprodeck-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ygoprodeck-api_table')
            ->hasCommand(YgoprodeckApiCommand::class);
    }
}
