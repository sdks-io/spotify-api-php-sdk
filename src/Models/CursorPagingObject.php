<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class CursorPagingObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $href;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * @var string|null
     */
    private $next;

    /**
     * @var CursorObject|null
     */
    private $cursors;

    /**
     * @var int|null
     */
    private $total;

    /**
     * Returns Href.
     * A link to the Web API endpoint returning the full result of the request.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * Sets Href.
     * A link to the Web API endpoint returning the full result of the request.
     *
     * @maps href
     */
    public function setHref(?string $href): void
    {
        $this->href = $href;
    }

    /**
     * Returns Limit.
     * The maximum number of items in the response (as set in the query or by default).
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * The maximum number of items in the response (as set in the query or by default).
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Next.
     * URL to the next page of items. ( `null` if none)
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     * URL to the next page of items. ( `null` if none)
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next = $next;
    }

    /**
     * Returns Cursors.
     * The cursors used to find the next set of items.
     */
    public function getCursors(): ?CursorObject
    {
        return $this->cursors;
    }

    /**
     * Sets Cursors.
     * The cursors used to find the next set of items.
     *
     * @maps cursors
     */
    public function setCursors(?CursorObject $cursors): void
    {
        $this->cursors = $cursors;
    }

    /**
     * Returns Total.
     * The total number of items available to return.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     * The total number of items available to return.
     *
     * @maps total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
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
        if (isset($this->href)) {
            $json['href']    = $this->href;
        }
        if (isset($this->limit)) {
            $json['limit']   = $this->limit;
        }
        if (isset($this->next)) {
            $json['next']    = $this->next;
        }
        if (isset($this->cursors)) {
            $json['cursors'] = $this->cursors;
        }
        if (isset($this->total)) {
            $json['total']   = $this->total;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
