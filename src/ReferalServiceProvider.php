<?php

namespace Chapdel\Referal;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chapdel\Referal\Commands\ReferalCommand;

class ReferalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-referal')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-referal_table')
            ->hasCommand(ReferalCommand::class);
    }
}
