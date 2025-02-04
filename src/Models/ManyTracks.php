<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class ManyTracks implements \JsonSerializable
{
    /**
     * @var TrackObject[]
     */
    private $tracks;

    /**
     * @param TrackObject[] $tracks
     */
    public function __construct(array $tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * Returns Tracks.
     *
     * @return TrackObject[]
     */
    public function getTracks(): array
    {
        return $this->tracks;
    }

    /**
     * Sets Tracks.
     *
     * @required
     * @maps tracks
     *
     * @param TrackObject[] $tracks
     */
    public function setTracks(array $tracks): void
    {
        $this->tracks = $tracks;
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
        $json['tracks'] = $this->tracks;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
