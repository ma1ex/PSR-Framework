<?php

/**
 * Project: psr7-framework.local;
 * File: index.php;
 * Developer: Matvienko Alexey (matvienko.alexey@gmail.com);
 * Date & Time: 14.11.2019, 20:08
 * Comment:
 */

use Framework\Http\Request;

chdir(dirname(__DIR__));
require_once 'vendor\autoload.php';

$request = (new Request())
    ->withQueryParams($_GET)
    ->withParsedBody($_POST);

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('X-Developer: ma1ex');
echo 'Hello, ' . $name . '!<br>';