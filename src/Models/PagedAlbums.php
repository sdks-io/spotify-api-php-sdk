<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class PagedAlbums implements \JsonSerializable
{
    /**
     * @var PagingSimplifiedAlbumObject
     */
    private $albums;

    /**
     * @param PagingSimplifiedAlbumObject $albums
     */
    public function __construct(PagingSimplifiedAlbumObject $albums)
    {
        $this->albums = $albums;
    }

    /**
     * Returns Albums.
     */
    public function getAlbums(): PagingSimplifiedAlbumObject
    {
        return $this->albums;
    }

    /**
     * Sets Albums.
     *
     * @required
     * @maps albums
     */
    public function setAlbums(PagingSimplifiedAlbumObject $albums): void
    {
        $this->albums = $albums;
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
        $json['albums'] = $this->albums;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
