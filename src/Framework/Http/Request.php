<?php

/**
 * Project: psr7-framework.local;
 * File: Request.php;
 * Developer: Matvienko Alexey (matvienko.alexey@gmail.com);
 * Date & Time: 15.11.2019, 23:32
 * Comment:
 */

namespace Framework\Http;

class Request {

    public function getQueryParams(): array {
        return $_GET;
    }

    public function getParsedBody() {
        return $_POST ?: null;
    }

}