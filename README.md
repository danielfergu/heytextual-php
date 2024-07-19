# HeyTextual PHP SDK

A PHP SDK for interacting with the HeyTextual API. This SDK provides a simple and convenient way to work with the HeyTextual API endpoints.

## Installation

You can install the SDK via Composer. Add the following to your `composer.json` file:

```json
{
    "require": {
        "heytextual/heytextual": "^1.0"
    }
}
```

Or run the following command:
```bash
composer require heytextual/heytextual

```

## Usage
First, include the Composer autoload file in your project:
```php
require 'vendor/autoload.php';

```

Then, use the Heytextual\Client class to interact with the API:
```php
use Heytextual\Client;

$client = new Client('your_api_key_here');

// Extract data from a file
$data = $client->extract('/path/to/file.pdf', 'TEMPLATEID');

// Fetch documents with optional parameters
$documents = $client->documents(['startDate' => '2022-01-01', 'endDate' => '2022-12-31', 'last' => 10]);

// Fetch a single document by ID
$document = $client->document('DOCUMENTID');

// Fetch templates with optional parameters
$templates = $client->templates(['startDate' => '2022-01-01', 'endDate' => '2022-12-31', 'last' => 10]);
```