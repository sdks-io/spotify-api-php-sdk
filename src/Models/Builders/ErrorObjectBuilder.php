<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ErrorObject;

/**
 * Builder for model ErrorObject
 *
 * @see ErrorObject
 */
class ErrorObjectBuilder
{
    /**
     * @var ErrorObject
     */
    private $instance;

    private function __construct(ErrorObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new error object Builder object.
     */
    public static function init(int $status, string $message): self
    {
        return new self(new ErrorObject($status, $message));
    }

    /**
     * Initializes a new error object object.
     */
    public function build(): ErrorObject
    {
        return CoreHelper::clone($this->instance);
    }
}
