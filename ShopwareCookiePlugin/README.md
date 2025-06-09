# ShopwareCookiePlugin

This example plugin registers a custom cookie called `example_tracking` in Shopware 6.
After installing the plugin, the cookie appears in the "statistics" cookie group of the consent manager.

## Installation

Copy the plugin into the `custom/plugins` directory of your Shopware installation.

When installing via upload, zip only the `ShopwareCookiePlugin` directory and place it in `custom/plugins`. Zipping the repository root will lead to the "No plugin found" error.

```bash
zip -r ShopwareCookiePlugin.zip ShopwareCookiePlugin
```

Run the following commands:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate ShopwareCookiePlugin
```
