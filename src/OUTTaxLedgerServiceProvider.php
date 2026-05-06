<?php


namespace Metallhobler\Seat\OUTTaxLedger;


use Seat\Services\AbstractSeatPlugin;

class OUTTaxLedgerServiceProvider extends AbstractSeatPlugin
{
    public function boot()
    {
        /*
        $this->add_routes();

        $this->add_publications();

        $this->add_views();

        $this->add_translations();

        $this->add_migrations();

        $this->add_commands();

        $this->register_dependency_injection_classes();
        */
    }

    public function register()
    {
        //$this->mergeConfigFrom(__DIR__ . '/Config/corpminingtax.config.php', 'corpminingtax.config');
        //$this->mergeConfigFrom(__DIR__ . '/Config/corpminingtax.locale.php', 'corpminingtax.locale');

        // Overload sidebar with your package menu entries
        $this->mergeConfigFrom(__DIR__ . '/Config/Menu/package.sidebar.php', 'package.sidebar');

        // Register generic permissions
        $this->registerPermissions(__DIR__ . '/Config/Permissions/corpminingtax.php', 'corpminingtax');
    }

    public function getName(): string
    {
        return "Outsmarted Tax Ledger";
    }

    public function getPackageRepositoryUrl(): string
    {
        return "https://github.com/metallhobler/out-taxledger";
    }

    public function getPackagistPackageName(): string
    {
        return "out-taxledger";
    }

    public function getPackagistVendorName(): string
    {
        return "metallhobler";
    }


}