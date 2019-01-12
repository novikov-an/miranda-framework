<?php

namespace Miranda\Http;

class Request
{
    private $queryParams;
    private $parsedBody;

    /**
     * Request constructor.
     *
     * @param array $get  - $_GET
     * @param array $post - $_POST
     */
    public function __construct($get = array(), $post = null)
    {
        $this->queryParams = $get;
        $this->parsedBody = $post;
    }

    public function withQueryParams($query)
    {
        $this->queryParams = $query;

        return $this;
    }


    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getParsedBody()
    {
        return $this->parsedBody ?: null;
    }

    public function withParsedBody($data)
    {
        $this->parsedBody = $data;
        return $this;
    }
}
