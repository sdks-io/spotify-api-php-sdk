<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\DisallowsObject;

/**
 * Builder for model DisallowsObject
 *
 * @see DisallowsObject
 */
class DisallowsObjectBuilder
{
    /**
     * @var DisallowsObject
     */
    private $instance;

    private function __construct(DisallowsObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new disallows object Builder object.
     */
    public static function init(): self
    {
        return new self(new DisallowsObject());
    }

    /**
     * Sets interrupting playback field.
     */
    public function interruptingPlayback(?bool $value): self
    {
        $this->instance->setInterruptingPlayback($value);
        return $this;
    }

    /**
     * Sets pausing field.
     */
    public function pausing(?bool $value): self
    {
        $this->instance->setPausing($value);
        return $this;
    }

    /**
     * Sets resuming field.
     */
    public function resuming(?bool $value): self
    {
        $this->instance->setResuming($value);
        return $this;
    }

    /**
     * Sets seeking field.
     */
    public function seeking(?bool $value): self
    {
        $this->instance->setSeeking($value);
        return $this;
    }

    /**
     * Sets skipping next field.
     */
    public function skippingNext(?bool $value): self
    {
        $this->instance->setSkippingNext($value);
        return $this;
    }

    /**
     * Sets skipping prev field.
     */
    public function skippingPrev(?bool $value): self
    {
        $this->instance->setSkippingPrev($value);
        return $this;
    }

    /**
     * Sets toggling repeat context field.
     */
    public function togglingRepeatContext(?bool $value): self
    {
        $this->instance->setTogglingRepeatContext($value);
        return $this;
    }

    /**
     * Sets toggling shuffle field.
     */
    public function togglingShuffle(?bool $value): self
    {
        $this->instance->setTogglingShuffle($value);
        return $this;
    }

    /**
     * Sets toggling repeat track field.
     */
    public function togglingRepeatTrack(?bool $value): self
    {
        $this->instance->setTogglingRepeatTrack($value);
        return $this;
    }

    /**
     * Sets transferring playback field.
     */
    public function transferringPlayback(?bool $value): self
    {
        $this->instance->setTransferringPlayback($value);
        return $this;
    }

    /**
     * Initializes a new disallows object object.
     */
    public function build(): DisallowsObject
    {
        return CoreHelper::clone($this->instance);
    }
}
