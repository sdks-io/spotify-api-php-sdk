<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\PagingPlaylistTrackObject;

/**
 * Builder for model PagingPlaylistTrackObject
 *
 * @see PagingPlaylistTrackObject
 */
class PagingPlaylistTrackObjectBuilder
{
    /**
     * @var PagingPlaylistTrackObject
     */
    private $instance;

    private function __construct(PagingPlaylistTrackObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new paging playlist track object Builder object.
     */
    public static function init(string $href, int $limit, int $offset, int $total, array $items): self
    {
        return new self(new PagingPlaylistTrackObject($href, $limit, $offset, $total, $items));
    }

    /**
     * Sets next field.
     */
    public function next(?string $value): self
    {
        $this->instance->setNext($value);
        return $this;
    }

    /**
     * Sets previous field.
     */
    public function previous(?string $value): self
    {
        $this->instance->setPrevious($value);
        return $this;
    }

    /**
     * Initializes a new paging playlist track object object.
     */
    public function build(): PagingPlaylistTrackObject
    {
        return CoreHelper::clone($this->instance);
    }
}
