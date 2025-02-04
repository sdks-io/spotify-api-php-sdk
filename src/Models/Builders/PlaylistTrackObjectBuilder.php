<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\PlaylistTrackObject;
use SpotifyWebAPILib\Models\PlaylistUserObject;

/**
 * Builder for model PlaylistTrackObject
 *
 * @see PlaylistTrackObject
 */
class PlaylistTrackObjectBuilder
{
    /**
     * @var PlaylistTrackObject
     */
    private $instance;

    private function __construct(PlaylistTrackObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new playlist track object Builder object.
     */
    public static function init(): self
    {
        return new self(new PlaylistTrackObject());
    }

    /**
     * Sets added at field.
     */
    public function addedAt(?\DateTime $value): self
    {
        $this->instance->setAddedAt($value);
        return $this;
    }

    /**
     * Sets added by field.
     */
    public function addedBy(?PlaylistUserObject $value): self
    {
        $this->instance->setAddedBy($value);
        return $this;
    }

    /**
     * Sets is local field.
     */
    public function isLocal(?bool $value): self
    {
        $this->instance->setIsLocal($value);
        return $this;
    }

    /**
     * Sets track field.
     */
    public function track(?array $value): self
    {
        $this->instance->setTrack($value);
        return $this;
    }

    /**
     * Initializes a new playlist track object object.
     */
    public function build(): PlaylistTrackObject
    {
        return CoreHelper::clone($this->instance);
    }
}
