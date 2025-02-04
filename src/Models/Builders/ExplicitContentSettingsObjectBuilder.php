<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ExplicitContentSettingsObject;

/**
 * Builder for model ExplicitContentSettingsObject
 *
 * @see ExplicitContentSettingsObject
 */
class ExplicitContentSettingsObjectBuilder
{
    /**
     * @var ExplicitContentSettingsObject
     */
    private $instance;

    private function __construct(ExplicitContentSettingsObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new explicit content settings object Builder object.
     */
    public static function init(): self
    {
        return new self(new ExplicitContentSettingsObject());
    }

    /**
     * Sets filter enabled field.
     */
    public function filterEnabled(?bool $value): self
    {
        $this->instance->setFilterEnabled($value);
        return $this;
    }

    /**
     * Sets filter locked field.
     */
    public function filterLocked(?bool $value): self
    {
        $this->instance->setFilterLocked($value);
        return $this;
    }

    /**
     * Initializes a new explicit content settings object object.
     */
    public function build(): ExplicitContentSettingsObject
    {
        return CoreHelper::clone($this->instance);
    }
}
