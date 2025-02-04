<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\AudioFeaturesObject;

/**
 * Builder for model AudioFeaturesObject
 *
 * @see AudioFeaturesObject
 */
class AudioFeaturesObjectBuilder
{
    /**
     * @var AudioFeaturesObject
     */
    private $instance;

    private function __construct(AudioFeaturesObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new audio features object Builder object.
     */
    public static function init(): self
    {
        return new self(new AudioFeaturesObject());
    }

    /**
     * Sets acousticness field.
     */
    public function acousticness(?float $value): self
    {
        $this->instance->setAcousticness($value);
        return $this;
    }

    /**
     * Sets analysis url field.
     */
    public function analysisUrl(?string $value): self
    {
        $this->instance->setAnalysisUrl($value);
        return $this;
    }

    /**
     * Sets danceability field.
     */
    public function danceability(?float $value): self
    {
        $this->instance->setDanceability($value);
        return $this;
    }

    /**
     * Sets duration ms field.
     */
    public function durationMs(?int $value): self
    {
        $this->instance->setDurationMs($value);
        return $this;
    }

    /**
     * Sets energy field.
     */
    public function energy(?float $value): self
    {
        $this->instance->setEnergy($value);
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
     * Sets instrumentalness field.
     */
    public function instrumentalness(?float $value): self
    {
        $this->instance->setInstrumentalness($value);
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
     * Sets liveness field.
     */
    public function liveness(?float $value): self
    {
        $this->instance->setLiveness($value);
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
     * Sets mode field.
     */
    public function mode(?int $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets speechiness field.
     */
    public function speechiness(?float $value): self
    {
        $this->instance->setSpeechiness($value);
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
     * Sets time signature field.
     */
    public function timeSignature(?int $value): self
    {
        $this->instance->setTimeSignature($value);
        return $this;
    }

    /**
     * Sets track href field.
     */
    public function trackHref(?string $value): self
    {
        $this->instance->setTrackHref($value);
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
     * Sets valence field.
     */
    public function valence(?float $value): self
    {
        $this->instance->setValence($value);
        return $this;
    }

    /**
     * Initializes a new audio features object object.
     */
    public function build(): AudioFeaturesObject
    {
        return CoreHelper::clone($this->instance);
    }
}
