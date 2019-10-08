<p align="center">
  <a href="https://www.bitmovin.com">
    <img alt="Bitmovin PHP API SDK Header" src="https://cdn.bitmovin.com/frontend/encoding/openapi-clients/readme-headers/ReadmeHeader_PHP.png" >
  </a>

  <h4 align="center">
    PHP API SDK which enables you to seamlessly integrate the Bitmovin API into your projects.
  </h4>

  <p align="center">
    <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License"></img></a>
  </p>
</p>

***Important: This is an alpha version. There may be breaking changes***

Using this API client requires an active account.

> Don't have an account yet? [Sign up for a free Bitmovin trial plan](https://dashboard.bitmovin.com/signup)!

For full documentation of all available API endpoints, see the [Bitmovin API reference](https://bitmovin.com/docs).

## Installation

Requirements: PHP 7.1.0 or higher

### Composer

To install the API client with composer, add the following to your composer.json file:

```json
{
"require":
  {
    "bitmovin/bitmovin-api-sdk-php": "1.25.0-ALPHA0"
  }
}
```

Then run `php composer.phar install`

OR

run the following command: `php composer.phar require bitmovin/bitmovin-api-sdk-php:1.25.0-ALPHA0`

## Initialization

```php
use BitmovinApiSdk\BitmovinApi;
use BitmovinApiSdk\Configuration;

$bitmovinApi = new BitmovinApi(Configuration::create()->apiKey($apiKey));
```
