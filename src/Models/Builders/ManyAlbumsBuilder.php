<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ManyAlbums;

/**
 * Builder for model ManyAlbums
 *
 * @see ManyAlbums
 */
class ManyAlbumsBuilder
{
    /**
     * @var ManyAlbums
     */
    private $instance;

    private function __construct(ManyAlbums $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new many albums Builder object.
     */
    public static function init(array $albums): self
    {
        return new self(new ManyAlbums($albums));
    }

    /**
     * Initializes a new many albums object.
     */
    public function build(): ManyAlbums
    {
        return CoreHelper::clone($this->instance);
    }
}
