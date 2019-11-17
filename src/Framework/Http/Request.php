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

    private $queryParams;
    private $parsedBody;

    public function __construct(array $queryParams = [], $parsedBody = null) {
        $this->queryParams = $queryParams;
        $this->parsedBody = $parsedBody;
    }
    
    public function getQueryParams(): array {
        return $this->queryParams;
    }

    public function withQueryParams(array $query): self {
        $this->queryParams = $query;
        return $this;
    }

    public function getParsedBody() {
        return $this->parsedBody;
    }

    public function withParsedBody($data): self {
        $this->parsedBody = $data;
        return $this;
    }

}