<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\SectionObject;

/**
 * Builder for model SectionObject
 *
 * @see SectionObject
 */
class SectionObjectBuilder
{
    /**
     * @var SectionObject
     */
    private $instance;

    private function __construct(SectionObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new section object Builder object.
     */
    public static function init(): self
    {
        return new self(new SectionObject());
    }

    /**
     * Sets start field.
     */
    public function start(?float $value): self
    {
        $this->instance->setStart($value);
        return $this;
    }

    /**
     * Sets duration field.
     */
    public function duration(?float $value): self
    {
        $this->instance->setDuration($value);
        return $this;
    }

    /**
     * Sets confidence field.
     */
    public function confidence(?float $value): self
    {
        $this->instance->setConfidence($value);
        return $this;
    }

    /**
     * Sets loudness field.
     */
    public function loudness(?float $value): self
    {
        $this->instance->setLoudness($value);
        return $this;
    }

    /**
     * Sets tempo field.
     */
    public function tempo(?float $value): self
    {
        $this->instance->setTempo($value);
        return $this;
    }

    /**
     * Sets tempo confidence field.
     */
    public function tempoConfidence(?float $value): self
    {
        $this->instance->setTempoConfidence($value);
        return $this;
    }

    /**
     * Sets key field.
     */
    public function key(?int $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets key confidence field.
     */
    public function keyConfidence(?float $value): self
    {
        $this->instance->setKeyConfidence($value);
        return $this;
    }

    /**
     * Sets mode field.
     */
    public function mode(?int $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets mode confidence field.
     */
    public function modeConfidence(?float $value): self
    {
        $this->instance->setModeConfidence($value);
        return $this;
    }

    /**
     * Sets time signature field.
     */
    public function timeSignature(?int $value): self
    {
        $this->instance->setTimeSignature($value);
        return $this;
    }

    /**
     * Sets time signature confidence field.
     */
    public function timeSignatureConfidence(?float $value): self
    {
        $this->instance->setTimeSignatureConfidence($value);
        return $this;
    }

    /**
     * Initializes a new section object object.
     */
    public function build(): SectionObject
    {
        return CoreHelper::clone($this->instance);
    }
}
