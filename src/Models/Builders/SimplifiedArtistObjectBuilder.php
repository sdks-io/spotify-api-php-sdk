<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ExternalUrlObject;
use SpotifyWebAPILib\Models\SimplifiedArtistObject;

/**
 * Builder for model SimplifiedArtistObject
 *
 * @see SimplifiedArtistObject
 */
class SimplifiedArtistObjectBuilder
{
    /**
     * @var SimplifiedArtistObject
     */
    private $instance;

    private function __construct(SimplifiedArtistObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new simplified artist object Builder object.
     */
    public static function init(): self
    {
        return new self(new SimplifiedArtistObject());
    }

    /**
     * Sets external urls field.
     */
    public function externalUrls(?ExternalUrlObject $value): self
    {
        $this->instance->setExternalUrls($value);
        return $this;
    }

    /**
     * Sets href field.
     */
    public function href(?string $value): self
    {
        $this->instance->setHref($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets uri field.
     */
    public function uri(?string $value): self
    {
        $this->instance->setUri($value);
        return $this;
    }

    /**
     * Initializes a new simplified artist object object.
     */
    public function build(): SimplifiedArtistObject
    {
        return CoreHelper::clone($this->instance);
    }
}
