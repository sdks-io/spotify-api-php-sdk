<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class PlaylistsTracksRequest2 implements \JsonSerializable
{
    /**
     * @var Track1[]
     */
    private $tracks;

    /**
     * @var string|null
     */
    private $snapshotId;

    /**
     * @param Track1[] $tracks
     */
    public function __construct(array $tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * Returns Tracks.
     * An array of objects containing [Spotify URIs](/documentation/web-api/concepts/spotify-uris-ids) of
     * the tracks or episodes to remove.
     * For example: `{ "tracks": [{ "uri": "spotify:track:4iV5W9uYEdYUVa79Axb7Rh" },{ "uri": "spotify:track:
     * 1301WleyT98MSxVHPZCA6M" }] }`. A maximum of 100 objects can be sent at once.
     *
     * @return Track1[]
     */
    public function getTracks(): array
    {
        return $this->tracks;
    }

    /**
     * Sets Tracks.
     * An array of objects containing [Spotify URIs](/documentation/web-api/concepts/spotify-uris-ids) of
     * the tracks or episodes to remove.
     * For example: `{ "tracks": [{ "uri": "spotify:track:4iV5W9uYEdYUVa79Axb7Rh" },{ "uri": "spotify:track:
     * 1301WleyT98MSxVHPZCA6M" }] }`. A maximum of 100 objects can be sent at once.
     *
     * @required
     * @maps tracks
     *
     * @param Track1[] $tracks
     */
    public function setTracks(array $tracks): void
    {
        $this->tracks = $tracks;
    }

    /**
     * Returns Snapshot Id.
     * The playlist's snapshot ID against which you want to make the changes.
     * The API will validate that the specified items exist and in the specified positions and make the
     * changes,
     * even if more recent changes have been made to the playlist.
     */
    public function getSnapshotId(): ?string
    {
        return $this->snapshotId;
    }

    /**
     * Sets Snapshot Id.
     * The playlist's snapshot ID against which you want to make the changes.
     * The API will validate that the specified items exist and in the specified positions and make the
     * changes,
     * even if more recent changes have been made to the playlist.
     *
     * @maps snapshot_id
     */
    public function setSnapshotId(?string $snapshotId): void
    {
        $this->snapshotId = $snapshotId;
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
        $json['tracks']          = $this->tracks;
        if (isset($this->snapshotId)) {
            $json['snapshot_id'] = $this->snapshotId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
