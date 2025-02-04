<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\PlaylistTracksRefObject;

/**
 * Builder for model PlaylistTracksRefObject
 *
 * @see PlaylistTracksRefObject
 */
class PlaylistTracksRefObjectBuilder
{
    /**
     * @var PlaylistTracksRefObject
     */
    private $instance;

    private function __construct(PlaylistTracksRefObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new playlist tracks ref object Builder object.
     */
    public static function init(): self
    {
        return new self(new PlaylistTracksRefObject());
    }

    /**
     * Sets href field.
     */
    public function href(?string $value): self
    {
        $this->instance->setHref($value);
        return $this;
    }

    /**
     * Sets total field.
     */
    public function total(?int $value): self
    {
        $this->instance->setTotal($value);
        return $this;
    }

    /**
     * Initializes a new playlist tracks ref object object.
     */
    public function build(): PlaylistTracksRefObject
    {
        return CoreHelper::clone($this->instance);
    }
}
