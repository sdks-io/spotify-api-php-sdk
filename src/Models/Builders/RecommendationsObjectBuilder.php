<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\RecommendationsObject;

/**
 * Builder for model RecommendationsObject
 *
 * @see RecommendationsObject
 */
class RecommendationsObjectBuilder
{
    /**
     * @var RecommendationsObject
     */
    private $instance;

    private function __construct(RecommendationsObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recommendations object Builder object.
     */
    public static function init(array $seeds, array $tracks): self
    {
        return new self(new RecommendationsObject($seeds, $tracks));
    }

    /**
     * Initializes a new recommendations object object.
     */
    public function build(): RecommendationsObject
    {
        return CoreHelper::clone($this->instance);
    }
}
