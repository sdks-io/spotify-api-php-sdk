<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class MePlayerPlayRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $contextUri;

    /**
     * @var string[]|null
     */
    private $uris;

    /**
     * @var array|null
     */
    private $offset;

    /**
     * @var int|null
     */
    private $positionMs;

    /**
     * Returns Context Uri.
     * Optional. Spotify URI of the context to play.
     * Valid contexts are albums, artists & playlists.
     * `{context_uri:"spotify:album:1Je1IMUlBXcx1Fz0WE7oPT"}`
     */
    public function getContextUri(): ?string
    {
        return $this->contextUri;
    }

    /**
     * Sets Context Uri.
     * Optional. Spotify URI of the context to play.
     * Valid contexts are albums, artists & playlists.
     * `{context_uri:"spotify:album:1Je1IMUlBXcx1Fz0WE7oPT"}`
     *
     * @maps context_uri
     */
    public function setContextUri(?string $contextUri): void
    {
        $this->contextUri = $contextUri;
    }

    /**
     * Returns Uris.
     * Optional. A JSON array of the Spotify track URIs to play.
     * For example: `{"uris": ["spotify:track:4iV5W9uYEdYUVa79Axb7Rh", "spotify:track:
     * 1301WleyT98MSxVHPZCA6M"]}`
     *
     * @return string[]|null
     */
    public function getUris(): ?array
    {
        return $this->uris;
    }

    /**
     * Sets Uris.
     * Optional. A JSON array of the Spotify track URIs to play.
     * For example: `{"uris": ["spotify:track:4iV5W9uYEdYUVa79Axb7Rh", "spotify:track:
     * 1301WleyT98MSxVHPZCA6M"]}`
     *
     * @maps uris
     *
     * @param string[]|null $uris
     */
    public function setUris(?array $uris): void
    {
        $this->uris = $uris;
    }

    /**
     * Returns Offset.
     * Optional. Indicates from where in the context playback should start. Only available when context_uri
     * corresponds to an album or playlist object
     * "position" is zero based and can’t be negative. Example: `"offset": {"position": 5}`
     * "uri" is a string representing the uri of the item to start at. Example: `"offset": {"uri": "spotify:
     * track:1301WleyT98MSxVHPZCA6M"}`
     */
    public function getOffset(): ?array
    {
        return $this->offset;
    }

    /**
     * Sets Offset.
     * Optional. Indicates from where in the context playback should start. Only available when context_uri
     * corresponds to an album or playlist object
     * "position" is zero based and can’t be negative. Example: `"offset": {"position": 5}`
     * "uri" is a string representing the uri of the item to start at. Example: `"offset": {"uri": "spotify:
     * track:1301WleyT98MSxVHPZCA6M"}`
     *
     * @maps offset
     */
    public function setOffset(?array $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Returns Position Ms.
     * Indicates from what position to start playback. Must be a positive number. Passing in a position
     * that is greater than the length of the track will cause the player to start playing the next song.
     */
    public function getPositionMs(): ?int
    {
        return $this->positionMs;
    }

    /**
     * Sets Position Ms.
     * Indicates from what position to start playback. Must be a positive number. Passing in a position
     * that is greater than the length of the track will cause the player to start playing the next song.
     *
     * @maps position_ms
     */
    public function setPositionMs(?int $positionMs): void
    {
        $this->positionMs = $positionMs;
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
        if (isset($this->contextUri)) {
            $json['context_uri'] = $this->contextUri;
        }
        if (isset($this->uris)) {
            $json['uris']        = $this->uris;
        }
        if (isset($this->offset)) {
            $json['offset']      = $this->offset;
        }
        if (isset($this->positionMs)) {
            $json['position_ms'] = $this->positionMs;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
