<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\ManyAudiobooks;

/**
 * Builder for model ManyAudiobooks
 *
 * @see ManyAudiobooks
 */
class ManyAudiobooksBuilder
{
    /**
     * @var ManyAudiobooks
     */
    private $instance;

    private function __construct(ManyAudiobooks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new many audiobooks Builder object.
     */
    public static function init(array $audiobooks): self
    {
        return new self(new ManyAudiobooks($audiobooks));
    }

    /**
     * Initializes a new many audiobooks object.
     */
    public function build(): ManyAudiobooks
    {
        return CoreHelper::clone($this->instance);
    }
}
