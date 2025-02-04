<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\FollowersObject;

/**
 * Builder for model FollowersObject
 *
 * @see FollowersObject
 */
class FollowersObjectBuilder
{
    /**
     * @var FollowersObject
     */
    private $instance;

    private function __construct(FollowersObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new followers object Builder object.
     */
    public static function init(): self
    {
        return new self(new FollowersObject());
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
     * Unsets href field.
     */
    public function unsetHref(): self
    {
        $this->instance->unsetHref();
        return $this;
    }

    /**
     * Sets total field.
     */
    public function total(?int $value): self
    {
        $this->instance->setTotal($value);
        return $this;
    }

    /**
     * Initializes a new followers object object.
     */
    public function build(): FollowersObject
    {
        return CoreHelper::clone($this->instance);
    }
}
