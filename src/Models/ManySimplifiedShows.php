<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class ManySimplifiedShows implements \JsonSerializable
{
    /**
     * @var ShowBase[]
     */
    private $shows;

    /**
     * @param ShowBase[] $shows
     */
    public function __construct(array $shows)
    {
        $this->shows = $shows;
    }

    /**
     * Returns Shows.
     *
     * @return ShowBase[]
     */
    public function getShows(): array
    {
        return $this->shows;
    }

    /**
     * Sets Shows.
     *
     * @required
     * @maps shows
     *
     * @param ShowBase[] $shows
     */
    public function setShows(array $shows): void
    {
        $this->shows = $shows;
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
        $json['shows'] = $this->shows;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
