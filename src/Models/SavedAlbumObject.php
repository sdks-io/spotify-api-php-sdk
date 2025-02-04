<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use SpotifyWebAPILib\Utils\DateTimeHelper;
use stdClass;

class SavedAlbumObject implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $addedAt;

    /**
     * @var AlbumObject|null
     */
    private $album;

    /**
     * Returns Added At.
     * The date and time the album was saved
     * Timestamps are returned in ISO 8601 format as Coordinated Universal Time (UTC) with a zero offset:
     * YYYY-MM-DDTHH:MM:SSZ.
     * If the time is imprecise (for example, the date/time of an album release), an additional field
     * indicates the precision; see for example, release_date in an album object.
     */
    public function getAddedAt(): ?\DateTime
    {
        return $this->addedAt;
    }

    /**
     * Sets Added At.
     * The date and time the album was saved
     * Timestamps are returned in ISO 8601 format as Coordinated Universal Time (UTC) with a zero offset:
     * YYYY-MM-DDTHH:MM:SSZ.
     * If the time is imprecise (for example, the date/time of an album release), an additional field
     * indicates the precision; see for example, release_date in an album object.
     *
     * @maps added_at
     * @factory \SpotifyWebAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAddedAt(?\DateTime $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    /**
     * Returns Album.
     * Information about the album.
     */
    public function getAlbum(): ?AlbumObject
    {
        return $this->album;
    }

    /**
     * Sets Album.
     * Information about the album.
     *
     * @maps album
     */
    public function setAlbum(?AlbumObject $album): void
    {
        $this->album = $album;
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
        if (isset($this->addedAt)) {
            $json['added_at'] = DateTimeHelper::toRfc3339DateTime($this->addedAt);
        }
        if (isset($this->album)) {
            $json['album']    = $this->album;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
