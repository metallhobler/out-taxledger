<?php


namespace Metallhobler\Seat\OUTTaxLedger;


use Seat\Services\AbstractSeatPlugin;

class OUTTaxLedgerServiceProvider extends AbstractSeatPlugin
{
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