<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class DisallowsObject implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $interruptingPlayback;

    /**
     * @var bool|null
     */
    private $pausing;

    /**
     * @var bool|null
     */
    private $resuming;

    /**
     * @var bool|null
     */
    private $seeking;

    /**
     * @var bool|null
     */
    private $skippingNext;

    /**
     * @var bool|null
     */
    private $skippingPrev;

    /**
     * @var bool|null
     */
    private $togglingRepeatContext;

    /**
     * @var bool|null
     */
    private $togglingShuffle;

    /**
     * @var bool|null
     */
    private $togglingRepeatTrack;

    /**
     * @var bool|null
     */
    private $transferringPlayback;

    /**
     * Returns Interrupting Playback.
     * Interrupting playback. Optional field.
     */
    public function getInterruptingPlayback(): ?bool
    {
        return $this->interruptingPlayback;
    }

    /**
     * Sets Interrupting Playback.
     * Interrupting playback. Optional field.
     *
     * @maps interrupting_playback
     */
    public function setInterruptingPlayback(?bool $interruptingPlayback): void
    {
        $this->interruptingPlayback = $interruptingPlayback;
    }

    /**
     * Returns Pausing.
     * Pausing. Optional field.
     */
    public function getPausing(): ?bool
    {
        return $this->pausing;
    }

    /**
     * Sets Pausing.
     * Pausing. Optional field.
     *
     * @maps pausing
     */
    public function setPausing(?bool $pausing): void
    {
        $this->pausing = $pausing;
    }

    /**
     * Returns Resuming.
     * Resuming. Optional field.
     */
    public function getResuming(): ?bool
    {
        return $this->resuming;
    }

    /**
     * Sets Resuming.
     * Resuming. Optional field.
     *
     * @maps resuming
     */
    public function setResuming(?bool $resuming): void
    {
        $this->resuming = $resuming;
    }

    /**
     * Returns Seeking.
     * Seeking playback location. Optional field.
     */
    public function getSeeking(): ?bool
    {
        return $this->seeking;
    }

    /**
     * Sets Seeking.
     * Seeking playback location. Optional field.
     *
     * @maps seeking
     */
    public function setSeeking(?bool $seeking): void
    {
        $this->seeking = $seeking;
    }

    /**
     * Returns Skipping Next.
     * Skipping to the next context. Optional field.
     */
    public function getSkippingNext(): ?bool
    {
        return $this->skippingNext;
    }

    /**
     * Sets Skipping Next.
     * Skipping to the next context. Optional field.
     *
     * @maps skipping_next
     */
    public function setSkippingNext(?bool $skippingNext): void
    {
        $this->skippingNext = $skippingNext;
    }

    /**
     * Returns Skipping Prev.
     * Skipping to the previous context. Optional field.
     */
    public function getSkippingPrev(): ?bool
    {
        return $this->skippingPrev;
    }

    /**
     * Sets Skipping Prev.
     * Skipping to the previous context. Optional field.
     *
     * @maps skipping_prev
     */
    public function setSkippingPrev(?bool $skippingPrev): void
    {
        $this->skippingPrev = $skippingPrev;
    }

    /**
     * Returns Toggling Repeat Context.
     * Toggling repeat context flag. Optional field.
     */
    public function getTogglingRepeatContext(): ?bool
    {
        return $this->togglingRepeatContext;
    }

    /**
     * Sets Toggling Repeat Context.
     * Toggling repeat context flag. Optional field.
     *
     * @maps toggling_repeat_context
     */
    public function setTogglingRepeatContext(?bool $togglingRepeatContext): void
    {
        $this->togglingRepeatContext = $togglingRepeatContext;
    }

    /**
     * Returns Toggling Shuffle.
     * Toggling shuffle flag. Optional field.
     */
    public function getTogglingShuffle(): ?bool
    {
        return $this->togglingShuffle;
    }

    /**
     * Sets Toggling Shuffle.
     * Toggling shuffle flag. Optional field.
     *
     * @maps toggling_shuffle
     */
    public function setTogglingShuffle(?bool $togglingShuffle): void
    {
        $this->togglingShuffle = $togglingShuffle;
    }

    /**
     * Returns Toggling Repeat Track.
     * Toggling repeat track flag. Optional field.
     */
    public function getTogglingRepeatTrack(): ?bool
    {
        return $this->togglingRepeatTrack;
    }

    /**
     * Sets Toggling Repeat Track.
     * Toggling repeat track flag. Optional field.
     *
     * @maps toggling_repeat_track
     */
    public function setTogglingRepeatTrack(?bool $togglingRepeatTrack): void
    {
        $this->togglingRepeatTrack = $togglingRepeatTrack;
    }

    /**
     * Returns Transferring Playback.
     * Transfering playback between devices. Optional field.
     */
    public function getTransferringPlayback(): ?bool
    {
        return $this->transferringPlayback;
    }

    /**
     * Sets Transferring Playback.
     * Transfering playback between devices. Optional field.
     *
     * @maps transferring_playback
     */
    public function setTransferringPlayback(?bool $transferringPlayback): void
    {
        $this->transferringPlayback = $transferringPlayback;
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
        if (isset($this->interruptingPlayback)) {
            $json['interrupting_playback']   = $this->interruptingPlayback;
        }
        if (isset($this->pausing)) {
            $json['pausing']                 = $this->pausing;
        }
        if (isset($this->resuming)) {
            $json['resuming']                = $this->resuming;
        }
        if (isset($this->seeking)) {
            $json['seeking']                 = $this->seeking;
        }
        if (isset($this->skippingNext)) {
            $json['skipping_next']           = $this->skippingNext;
        }
        if (isset($this->skippingPrev)) {
            $json['skipping_prev']           = $this->skippingPrev;
        }
        if (isset($this->togglingRepeatContext)) {
            $json['toggling_repeat_context'] = $this->togglingRepeatContext;
        }
        if (isset($this->togglingShuffle)) {
            $json['toggling_shuffle']        = $this->togglingShuffle;
        }
        if (isset($this->togglingRepeatTrack)) {
            $json['toggling_repeat_track']   = $this->togglingRepeatTrack;
        }
        if (isset($this->transferringPlayback)) {
            $json['transferring_playback']   = $this->transferringPlayback;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
