<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ExternalUrlObject;
use SpotifyWebAPILib\Models\PagingSimplifiedEpisodeObject;
use SpotifyWebAPILib\Models\ShowObject;

/**
 * Builder for model ShowObject
 *
 * @see ShowObject
 */
class ShowObjectBuilder
{
    /**
     * @var ShowObject
     */
    private $instance;

    private function __construct(ShowObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new show object Builder object.
     */
    public static function init(
        array $availableMarkets,
        array $copyrights,
        string $description,
        string $htmlDescription,
        bool $explicit,
        ExternalUrlObject $externalUrls,
        string $href,
        string $id,
        array $images,
        bool $isExternallyHosted,
        array $languages,
        string $mediaType,
        string $name,
        string $publisher,
        string $type,
        string $uri,
        int $totalEpisodes,
        PagingSimplifiedEpisodeObject $episodes
    ): self {
        return new self(new ShowObject(
            $availableMarkets,
            $copyrights,
            $description,
            $htmlDescription,
            $explicit,
            $externalUrls,
            $href,
            $id,
            $images,
            $isExternallyHosted,
            $languages,
            $mediaType,
            $name,
            $publisher,
            $type,
            $uri,
            $totalEpisodes,
            $episodes
        ));
    }

    /**
     * Initializes a new show object object.
     */
    public function build(): ShowObject
    {
        return CoreHelper::clone($this->instance);
    }
}
