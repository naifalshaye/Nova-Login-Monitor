# Nova Login Monitor

Monitor Nova Login via Slack notifications, Receive a notification every time someone's login to your system.

## Installation

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require naif/nova-login-monitor
```
## Configuration
Publish the package config file:
```bash
php artisan vendor:publish --provider="Naif\NovaLoginMonitor\CardServiceProvider"
```

Configuration will be published at [config/nova-login-monitor.php].


Add your Slack app's Incoming Webhook to your `.env` and `.env.example`:

```
SLACK_HOOK=https://hooks.slack.com/services/######//######//###########
```

Create your app and generate Webhook from https://api.slack.com/apps

## Usage:
Add the below to app/Providers/NovaServiceProvider.php

```php
new NovaLoginMonitor()
```

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
