# Laravel Slack Notification Helper

## Installation

Add in dependencies by composer:

```bash
composer require onursimsek/slack-helper
```

Publish the configuration file:

```bash
php artisan vendor:publish --provider="SlackHelper\ServiceProvider"
```

## Configuration

Add the following line to your environment file and set your webhook url.

```
SLACK_WEBHOOK_URL=..............
```

## Usage

Send a message to default (#general) channel

```php
slack()->message('Hello world');
```

Send a message to specific channel

```php
slack()->to('#notification')->message('Hello other world');
```
