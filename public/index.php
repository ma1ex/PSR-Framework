<?php

/**
 * Project: psr7-framework.local;
 * File: index.php;
 * Developer: Matvienko Alexey (matvienko.alexey@gmail.com);
 * Date & Time: 14.11.2019, 20:08
 * Comment:
 */

use Framework\Http\Request;
use Framework\Http\Response;

chdir(dirname(__DIR__));
require_once 'vendor\autoload.php';

// Init

$request = (new Request())
    ->withQueryParams($_GET)
    ->withParsedBody($_POST);

// Action

$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new Response('Hello, ' . $name . '!'))
    ->withHeader('X-Developer', 'ma1ex');

// Sending

header('HTTP/1.0' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());
foreach($response->getHeaders() as $name => $value) {
    header($name . ':' . $value);
}
echo $response->getBody();