<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class ResumePointObject implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $fullyPlayed;

    /**
     * @var int|null
     */
    private $resumePositionMs;

    /**
     * Returns Fully Played.
     * Whether or not the episode has been fully played by the user.
     */
    public function getFullyPlayed(): ?bool
    {
        return $this->fullyPlayed;
    }

    /**
     * Sets Fully Played.
     * Whether or not the episode has been fully played by the user.
     *
     * @maps fully_played
     */
    public function setFullyPlayed(?bool $fullyPlayed): void
    {
        $this->fullyPlayed = $fullyPlayed;
    }

    /**
     * Returns Resume Position Ms.
     * The user's most recent position in the episode in milliseconds.
     */
    public function getResumePositionMs(): ?int
    {
        return $this->resumePositionMs;
    }

    /**
     * Sets Resume Position Ms.
     * The user's most recent position in the episode in milliseconds.
     *
     * @maps resume_position_ms
     */
    public function setResumePositionMs(?int $resumePositionMs): void
    {
        $this->resumePositionMs = $resumePositionMs;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->fullyPlayed)) {
            $json['fully_played']       = $this->fullyPlayed;
        }
        if (isset($this->resumePositionMs)) {
            $json['resume_position_ms'] = $this->resumePositionMs;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
