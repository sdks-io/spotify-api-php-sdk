<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\MeFollowingRequest1;

/**
 * Builder for model MeFollowingRequest1
 *
 * @see MeFollowingRequest1
 */
class MeFollowingRequest1Builder
{
    /**
     * @var MeFollowingRequest1
     */
    private $instance;

    private function __construct(MeFollowingRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new me following request 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new MeFollowingRequest1());
    }

    /**
     * Sets ids field.
     */
    public function ids(?array $value): self
    {
        $this->instance->setIds($value);
        return $this;
    }

    /**
     * Initializes a new me following request 1 object.
     */
    public function build(): MeFollowingRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
