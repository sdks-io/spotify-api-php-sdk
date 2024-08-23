<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\MeEpisodesRequest;

/**
 * Builder for model MeEpisodesRequest
 *
 * @see MeEpisodesRequest
 */
class MeEpisodesRequestBuilder
{
    /**
     * @var MeEpisodesRequest
     */
    private $instance;

    private function __construct(MeEpisodesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new me episodes request Builder object.
     */
    public static function init(array $ids): self
    {
        return new self(new MeEpisodesRequest($ids));
    }

    /**
     * Initializes a new me episodes request object.
     */
    public function build(): MeEpisodesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
