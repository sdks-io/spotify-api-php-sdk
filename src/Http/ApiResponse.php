<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Http;

use Core\Types\Sdk\CoreApiResponse;

/**
 * Holds the result of an API call.
 */
class ApiResponse extends CoreApiResponse
{
    /**
     * Create a new instance of this class with the given context and result.
     *
     * @param mixed $decodedBody Decoded response body
     * @param mixed $result Deserialized result from the response
     * @param HttpContext $context Http context
     */
    public static function createFromContext($decodedBody, $result, HttpContext $context): self
    {
        $request = $context->getRequest();
        $statusCode = $context->getResponse()->getStatusCode();
        $reasonPhrase = null; // TODO
        $headers = $context->getResponse()->getHeaders();
        $body = $context->getResponse()->getRawBody();

        return new self($request, $statusCode, $reasonPhrase, $headers, $result, $body);
    }

    /**
     * Returns the original request that resulted in this response.
     */
    public function getRequest(): HttpRequest
    {
        return $this->request;
    }
}
