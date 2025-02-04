<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class PagedCategories implements \JsonSerializable
{
    /**
     * @var Categories
     */
    private $categories;

    /**
     * @param Categories $categories
     */
    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Returns Categories.
     */
    public function getCategories(): Categories
    {
        return $this->categories;
    }

    /**
     * Sets Categories.
     *
     * @required
     * @maps categories
     */
    public function setCategories(Categories $categories): void
    {
        $this->categories = $categories;
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
        $json['categories'] = $this->categories;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
