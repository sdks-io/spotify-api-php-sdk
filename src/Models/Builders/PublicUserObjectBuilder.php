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
use SpotifyWebAPILib\Models\FollowersObject;
use SpotifyWebAPILib\Models\PublicUserObject;

/**
 * Builder for model PublicUserObject
 *
 * @see PublicUserObject
 */
class PublicUserObjectBuilder
{
    /**
     * @var PublicUserObject
     */
    private $instance;

    private function __construct(PublicUserObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new public user object Builder object.
     */
    public static function init(): self
    {
        return new self(new PublicUserObject());
    }

    /**
     * Sets display name field.
     */
    public function displayName(?string $value): self
    {
        $this->instance->setDisplayName($value);
        return $this;
    }

    /**
     * Unsets display name field.
     */
    public function unsetDisplayName(): self
    {
        $this->instance->unsetDisplayName();
        return $this;
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
     * Sets followers field.
     */
    public function followers(?FollowersObject $value): self
    {
        $this->instance->setFollowers($value);
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
     * Sets images field.
     */
    public function images(?array $value): self
    {
        $this->instance->setImages($value);
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
     * Initializes a new public user object object.
     */
    public function build(): PublicUserObject
    {
        return CoreHelper::clone($this->instance);
    }
}
