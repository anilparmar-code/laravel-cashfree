<?php

namespace AnilParmarCode\Cashfree;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnilParmarCode\Cashfree\Commands\CashfreeCommand;

class CashfreeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cashfree')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_cashfree_table')
            ->hasCommand(CashfreeCommand::class);
    }
}
