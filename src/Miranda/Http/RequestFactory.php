<?php

namespace Miranda\Http;

class RequestFactory
{
    /**
     * @return \Miranda\Http\Request
     */
    public static function fromGlobals()
    {
        $request = (new Request())
            ->withQueryParams($_GET)
            ->withParsedBody($_POST);

        return $request;
    }
}
