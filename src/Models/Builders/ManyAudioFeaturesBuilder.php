<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ManyAudioFeatures;

/**
 * Builder for model ManyAudioFeatures
 *
 * @see ManyAudioFeatures
 */
class ManyAudioFeaturesBuilder
{
    /**
     * @var ManyAudioFeatures
     */
    private $instance;

    private function __construct(ManyAudioFeatures $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new many audio features Builder object.
     */
    public static function init(array $audioFeatures): self
    {
        return new self(new ManyAudioFeatures($audioFeatures));
    }

    /**
     * Initializes a new many audio features object.
     */
    public function build(): ManyAudioFeatures
    {
        return CoreHelper::clone($this->instance);
    }
}
