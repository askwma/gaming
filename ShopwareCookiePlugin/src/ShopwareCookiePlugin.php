<?php declare(strict_types=1);

namespace ShopwareCookiePlugin;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class ShopwareCookiePlugin extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        parent::install($installContext);
        // additional install logic if needed
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);
        // additional uninstall logic if needed
    }
}
