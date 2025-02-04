<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class ManyAudioFeatures implements \JsonSerializable
{
    /**
     * @var AudioFeaturesObject[]
     */
    private $audioFeatures;

    /**
     * @param AudioFeaturesObject[] $audioFeatures
     */
    public function __construct(array $audioFeatures)
    {
        $this->audioFeatures = $audioFeatures;
    }

    /**
     * Returns Audio Features.
     *
     * @return AudioFeaturesObject[]
     */
    public function getAudioFeatures(): array
    {
        return $this->audioFeatures;
    }

    /**
     * Sets Audio Features.
     *
     * @required
     * @maps audio_features
     *
     * @param AudioFeaturesObject[] $audioFeatures
     */
    public function setAudioFeatures(array $audioFeatures): void
    {
        $this->audioFeatures = $audioFeatures;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['audio_features'] = $this->audioFeatures;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
