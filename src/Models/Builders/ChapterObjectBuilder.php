<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\AudiobookBase;
use SpotifyWebAPILib\Models\ChapterObject;
use SpotifyWebAPILib\Models\ChapterRestrictionObject;
use SpotifyWebAPILib\Models\ExternalUrlObject;
use SpotifyWebAPILib\Models\ResumePointObject;

/**
 * Builder for model ChapterObject
 *
 * @see ChapterObject
 */
class ChapterObjectBuilder
{
    /**
     * @var ChapterObject
     */
    private $instance;

    private function __construct(ChapterObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new chapter object Builder object.
     */
    public static function init(
        int $chapterNumber,
        string $description,
        string $htmlDescription,
        int $durationMs,
        bool $explicit,
        ExternalUrlObject $externalUrls,
        string $href,
        string $id,
        array $images,
        bool $isPlayable,
        array $languages,
        string $name,
        string $releaseDate,
        string $releaseDatePrecision,
        string $type,
        string $uri,
        AudiobookBase $audiobook
    ): self {
        return new self(new ChapterObject(
            $chapterNumber,
            $description,
            $htmlDescription,
            $durationMs,
            $explicit,
            $externalUrls,
            $href,
            $id,
            $images,
            $isPlayable,
            $languages,
            $name,
            $releaseDate,
            $releaseDatePrecision,
            $type,
            $uri,
            $audiobook
        ));
    }

    /**
     * Sets audio preview url field.
     */
    public function audioPreviewUrl(?string $value): self
    {
        $this->instance->setAudioPreviewUrl($value);
        return $this;
    }

    /**
     * Sets available markets field.
     */
    public function availableMarkets(?array $value): self
    {
        $this->instance->setAvailableMarkets($value);
        return $this;
    }

    /**
     * Sets resume point field.
     */
    public function resumePoint(?ResumePointObject $value): self
    {
        $this->instance->setResumePoint($value);
        return $this;
    }

    /**
     * Sets restrictions field.
     */
    public function restrictions(?ChapterRestrictionObject $value): self
    {
        $this->instance->setRestrictions($value);
        return $this;
    }

    /**
     * Initializes a new chapter object object.
     */
    public function build(): ChapterObject
    {
        return CoreHelper::clone($this->instance);
    }
}
