<?php declare(strict_types=1);

namespace ShopwareCookiePlugin\Cookie;

use Shopware\Storefront\Framework\Cookie\CookieProviderInterface;
use Shopware\Storefront\Framework\Cookie\CookieCollection;
use Shopware\Storefront\Framework\Cookie\CookieStruct;

class ExampleCookieProvider implements CookieProviderInterface
{
    public function getCookies(): CookieCollection
    {
        return new CookieCollection([
            (new CookieStruct('example_tracking', CookieStruct::COOKIE_GROUP_STATISTICS))
                ->setLifetime('30 days')
                ->setSnippetName('cookie.configuration.exampleTracking')
                ->setCookie('-'),
        ]);
    }
}
