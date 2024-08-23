<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class MeFollowingRequest1 implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $ids;

    /**
     * Returns Ids.
     * A JSON array of the artist or user [Spotify IDs](/documentation/web-api/concepts/spotify-uris-ids).
     * For example: `{ids:["74ASZWbe4lXaubB36ztrGX", "08td7MxkoHQkXnWAYD8d6Q"]}`. A maximum of 50 IDs can
     * be sent in one request. _**Note**: if the `ids` parameter is present in the query string, any IDs
     * listed here in the body will be ignored._
     *
     * @return string[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     * A JSON array of the artist or user [Spotify IDs](/documentation/web-api/concepts/spotify-uris-ids).
     * For example: `{ids:["74ASZWbe4lXaubB36ztrGX", "08td7MxkoHQkXnWAYD8d6Q"]}`. A maximum of 50 IDs can
     * be sent in one request. _**Note**: if the `ids` parameter is present in the query string, any IDs
     * listed here in the body will be ignored._
     *
     * @maps ids
     *
     * @param string[]|null $ids
     */
    public function setIds(?array $ids): void
    {
        $this->ids = $ids;
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
        if (isset($this->ids)) {
            $json['ids'] = $this->ids;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
