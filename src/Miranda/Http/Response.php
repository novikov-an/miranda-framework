<?php

namespace Miranda\Http;

class Response
{
    private $headers = [];
    private $body;
    private $statusCode;
    private $reasonPhrase;

    private static $phrases = [
        200 => 'OK',
        301 => 'Moved Permanently',
        400 => 'Bad Request',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error',
    ];

    public function __construct($body, $status = 200)
    {
        $this->body = $body;
        $this->statusCode = $status;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function withBody($body)
    {
        $new = clone $this;
        $new->body = $body;
        return $new;
    }
}
