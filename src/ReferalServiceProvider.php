<?php

namespace Chapdel\Referal;

use Chapdel\Referal\Commands\ReferalCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
