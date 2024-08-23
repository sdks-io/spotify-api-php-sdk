<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\PagingFeaturedPlaylistObject;
use SpotifyWebAPILib\Models\PagingPlaylistObject;

/**
 * Builder for model PagingFeaturedPlaylistObject
 *
 * @see PagingFeaturedPlaylistObject
 */
class PagingFeaturedPlaylistObjectBuilder
{
    /**
     * @var PagingFeaturedPlaylistObject
     */
    private $instance;

    private function __construct(PagingFeaturedPlaylistObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new paging featured playlist object Builder object.
     */
    public static function init(): self
    {
        return new self(new PagingFeaturedPlaylistObject());
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets playlists field.
     */
    public function playlists(?PagingPlaylistObject $value): self
    {
        $this->instance->setPlaylists($value);
        return $this;
    }

    /**
     * Initializes a new paging featured playlist object object.
     */
    public function build(): PagingFeaturedPlaylistObject
    {
        return CoreHelper::clone($this->instance);
    }
}
