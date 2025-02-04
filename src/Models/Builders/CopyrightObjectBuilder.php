<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\CopyrightObject;

/**
 * Builder for model CopyrightObject
 *
 * @see CopyrightObject
 */
class CopyrightObjectBuilder
{
    /**
     * @var CopyrightObject
     */
    private $instance;

    private function __construct(CopyrightObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new copyright object Builder object.
     */
    public static function init(): self
    {
        return new self(new CopyrightObject());
    }

    /**
     * Sets text field.
     */
    public function text(?string $value): self
    {
        $this->instance->setText($value);
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
     * Initializes a new copyright object object.
     */
    public function build(): CopyrightObject
    {
        return CoreHelper::clone($this->instance);
    }
}
