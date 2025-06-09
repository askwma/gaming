# ShopwareCookiePlugin

This example plugin registers a custom cookie called `example_tracking` in Shopware 6.
After installing the plugin, the cookie appears in the "statistics" cookie group of the consent manager.

## Installation

Copy the plugin into the `custom/plugins` directory of your Shopware installation and run the following commands:

```bash
bin/console plugin:refresh
bin/console plugin:install --activate ShopwareCookiePlugin
```
