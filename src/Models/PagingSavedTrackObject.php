<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class PagingSavedTrackObject implements \JsonSerializable
{
    /**
     * @var string
     */
    private $href;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var string|null
     */
    private $next;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var string|null
     */
    private $previous;

    /**
     * @var int
     */
    private $total;

    /**
     * @var SavedTrackObject[]
     */
    private $items;

    /**
     * @param string $href
     * @param int $limit
     * @param int $offset
     * @param int $total
     * @param SavedTrackObject[] $items
     */
    public function __construct(string $href, int $limit, int $offset, int $total, array $items)
    {
        $this->href = $href;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->total = $total;
        $this->items = $items;
    }

    /**
     * Returns Href.
     * A link to the Web API endpoint returning the full result of the request
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * Sets Href.
     * A link to the Web API endpoint returning the full result of the request
     *
     * @required
     * @maps href
     */
    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    /**
     * Returns Limit.
     * The maximum number of items in the response (as set in the query or by default).
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * The maximum number of items in the response (as set in the query or by default).
     *
     * @required
     * @maps limit
     */
    public function setLimit(int $limit): void
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
     * Returns Offset.
     * The offset of the items returned (as set in the query or by default)
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Sets Offset.
     * The offset of the items returned (as set in the query or by default)
     *
     * @required
     * @maps offset
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Returns Previous.
     * URL to the previous page of items. ( `null` if none)
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     * URL to the previous page of items. ( `null` if none)
     *
     * @maps previous
     */
    public function setPrevious(?string $previous): void
    {
        $this->previous = $previous;
    }

    /**
     * Returns Total.
     * The total number of items available to return.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     * The total number of items available to return.
     *
     * @required
     * @maps total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Items.
     *
     * @return SavedTrackObject[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @required
     * @maps items
     *
     * @param SavedTrackObject[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
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
        $json['href']     = $this->href;
        $json['limit']    = $this->limit;
        $json['next']     = $this->next;
        $json['offset']   = $this->offset;
        $json['previous'] = $this->previous;
        $json['total']    = $this->total;
        $json['items']    = $this->items;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
