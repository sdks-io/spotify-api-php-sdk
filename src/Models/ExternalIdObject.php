<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class ExternalIdObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $isrc;

    /**
     * @var string|null
     */
    private $ean;

    /**
     * @var string|null
     */
    private $upc;

    /**
     * Returns Isrc.
     * [International Standard Recording Code](http://en.wikipedia.
     * org/wiki/International_Standard_Recording_Code)
     */
    public function getIsrc(): ?string
    {
        return $this->isrc;
    }

    /**
     * Sets Isrc.
     * [International Standard Recording Code](http://en.wikipedia.
     * org/wiki/International_Standard_Recording_Code)
     *
     * @maps isrc
     */
    public function setIsrc(?string $isrc): void
    {
        $this->isrc = $isrc;
    }

    /**
     * Returns Ean.
     * [International Article Number](http://en.wikipedia.org/wiki/International_Article_Number_%28EAN%29)
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }

    /**
     * Sets Ean.
     * [International Article Number](http://en.wikipedia.org/wiki/International_Article_Number_%28EAN%29)
     *
     * @maps ean
     */
    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * Returns Upc.
     * [Universal Product Code](http://en.wikipedia.org/wiki/Universal_Product_Code)
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    /**
     * Sets Upc.
     * [Universal Product Code](http://en.wikipedia.org/wiki/Universal_Product_Code)
     *
     * @maps upc
     */
    public function setUpc(?string $upc): void
    {
        $this->upc = $upc;
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
        if (isset($this->isrc)) {
            $json['isrc'] = $this->isrc;
        }
        if (isset($this->ean)) {
            $json['ean']  = $this->ean;
        }
        if (isset($this->upc)) {
            $json['upc']  = $this->upc;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
