<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class CurrentlyPlayingContextObject implements \JsonSerializable
{
    /**
     * @var DeviceObject|null
     */
    private $device;

    /**
     * @var string|null
     */
    private $repeatState;

    /**
     * @var bool|null
     */
    private $shuffleState;

    /**
     * @var ContextObject|null
     */
    private $context;

    /**
     * @var int|null
     */
    private $timestamp;

    /**
     * @var int|null
     */
    private $progressMs;

    /**
     * @var bool|null
     */
    private $isPlaying;

    /**
     * @var array|null
     */
    private $item;

    /**
     * @var string|null
     */
    private $currentlyPlayingType;

    /**
     * @var DisallowsObject|null
     */
    private $actions;

    /**
     * Returns Device.
     * The device that is currently active.
     */
    public function getDevice(): ?DeviceObject
    {
        return $this->device;
    }

    /**
     * Sets Device.
     * The device that is currently active.
     *
     * @maps device
     */
    public function setDevice(?DeviceObject $device): void
    {
        $this->device = $device;
    }

    /**
     * Returns Repeat State.
     * off, track, context
     */
    public function getRepeatState(): ?string
    {
        return $this->repeatState;
    }

    /**
     * Sets Repeat State.
     * off, track, context
     *
     * @maps repeat_state
     */
    public function setRepeatState(?string $repeatState): void
    {
        $this->repeatState = $repeatState;
    }

    /**
     * Returns Shuffle State.
     * If shuffle is on or off.
     */
    public function getShuffleState(): ?bool
    {
        return $this->shuffleState;
    }

    /**
     * Sets Shuffle State.
     * If shuffle is on or off.
     *
     * @maps shuffle_state
     */
    public function setShuffleState(?bool $shuffleState): void
    {
        $this->shuffleState = $shuffleState;
    }

    /**
     * Returns Context.
     * A Context Object. Can be `null`.
     */
    public function getContext(): ?ContextObject
    {
        return $this->context;
    }

    /**
     * Sets Context.
     * A Context Object. Can be `null`.
     *
     * @maps context
     */
    public function setContext(?ContextObject $context): void
    {
        $this->context = $context;
    }

    /**
     * Returns Timestamp.
     * Unix Millisecond Timestamp when data was fetched.
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * Unix Millisecond Timestamp when data was fetched.
     *
     * @maps timestamp
     */
    public function setTimestamp(?int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Progress Ms.
     * Progress into the currently playing track or episode. Can be `null`.
     */
    public function getProgressMs(): ?int
    {
        return $this->progressMs;
    }

    /**
     * Sets Progress Ms.
     * Progress into the currently playing track or episode. Can be `null`.
     *
     * @maps progress_ms
     */
    public function setProgressMs(?int $progressMs): void
    {
        $this->progressMs = $progressMs;
    }

    /**
     * Returns Is Playing.
     * If something is currently playing, return `true`.
     */
    public function getIsPlaying(): ?bool
    {
        return $this->isPlaying;
    }

    /**
     * Sets Is Playing.
     * If something is currently playing, return `true`.
     *
     * @maps is_playing
     */
    public function setIsPlaying(?bool $isPlaying): void
    {
        $this->isPlaying = $isPlaying;
    }

    /**
     * Returns Item.
     * The currently playing track or episode. Can be `null`.
     */
    public function getItem(): ?array
    {
        return $this->item;
    }

    /**
     * Sets Item.
     * The currently playing track or episode. Can be `null`.
     *
     * @maps item
     */
    public function setItem(?array $item): void
    {
        $this->item = $item;
    }

    /**
     * Returns Currently Playing Type.
     * The object type of the currently playing item. Can be one of `track`, `episode`, `ad` or `unknown`.
     */
    public function getCurrentlyPlayingType(): ?string
    {
        return $this->currentlyPlayingType;
    }

    /**
     * Sets Currently Playing Type.
     * The object type of the currently playing item. Can be one of `track`, `episode`, `ad` or `unknown`.
     *
     * @maps currently_playing_type
     */
    public function setCurrentlyPlayingType(?string $currentlyPlayingType): void
    {
        $this->currentlyPlayingType = $currentlyPlayingType;
    }

    /**
     * Returns Actions.
     * Allows to update the user interface based on which playback actions are available within the current
     * context.
     */
    public function getActions(): ?DisallowsObject
    {
        return $this->actions;
    }

    /**
     * Sets Actions.
     * Allows to update the user interface based on which playback actions are available within the current
     * context.
     *
     * @maps actions
     */
    public function setActions(?DisallowsObject $actions): void
    {
        $this->actions = $actions;
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
        if (isset($this->device)) {
            $json['device']                 = $this->device;
        }
        if (isset($this->repeatState)) {
            $json['repeat_state']           = $this->repeatState;
        }
        if (isset($this->shuffleState)) {
            $json['shuffle_state']          = $this->shuffleState;
        }
        if (isset($this->context)) {
            $json['context']                = $this->context;
        }
        if (isset($this->timestamp)) {
            $json['timestamp']              = $this->timestamp;
        }
        if (isset($this->progressMs)) {
            $json['progress_ms']            = $this->progressMs;
        }
        if (isset($this->isPlaying)) {
            $json['is_playing']             = $this->isPlaying;
        }
        if (isset($this->item)) {
            $json['item']                   = $this->item;
        }
        if (isset($this->currentlyPlayingType)) {
            $json['currently_playing_type'] = $this->currentlyPlayingType;
        }
        if (isset($this->actions)) {
            $json['actions']                = $this->actions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
