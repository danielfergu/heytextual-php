# HeyTextual PHP SDK

Este SDK proporciona una forma simple de interactuar con la API de HeyTextual.

## Instalación

Puedes instalar el SDK a través de Composer. Añade lo siguiente a tu archivo `composer.json`:

```json
{
    "require": {
        "heytextual/heytextual": "^1.0"
    }
}
```

O ejecuta el siguiente comando:
```bash
composer require heytextual/heytextual

```

## Uso
Primero, incluye el archivo de autoload de Composer en tu proyecto:
```php
<?php

require 'vendor/autoload.php';

```

Luego, usa la clase Heytextual\Client para interactuar con la API:
```php
use Heytextual\Client;

$client = new Client('your_api_key_here');

// Extrae los datos de un archivo
$data = $client->extract('/ruta/al/archivo.pdf', 'AUTO');
print_r($data);

// Obtén los documentos
$documents = $client->documents(['startDate' => '2022-01-01', 'endDate' => '2022-12-31', 'last' => 10]);
print_r($documents);

// Obtén los resultados de un documento
$document = $client->document('DOCUMENTID');
print_r($document);

// Obtén las plantillas
$templates = $client->templates(['startDate' => '2022-01-01', 'endDate' => '2022-12-31', 'last' => 10]);
print_r($templates);
```