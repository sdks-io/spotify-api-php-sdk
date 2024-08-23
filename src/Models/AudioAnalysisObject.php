<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class AudioAnalysisObject implements \JsonSerializable
{
    /**
     * @var Meta|null
     */
    private $meta;

    /**
     * @var Track|null
     */
    private $track;

    /**
     * @var TimeIntervalObject[]|null
     */
    private $bars;

    /**
     * @var TimeIntervalObject[]|null
     */
    private $beats;

    /**
     * @var SectionObject[]|null
     */
    private $sections;

    /**
     * @var SegmentObject[]|null
     */
    private $segments;

    /**
     * @var TimeIntervalObject[]|null
     */
    private $tatums;

    /**
     * Returns Meta.
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?Meta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Returns Track.
     */
    public function getTrack(): ?Track
    {
        return $this->track;
    }

    /**
     * Sets Track.
     *
     * @maps track
     */
    public function setTrack(?Track $track): void
    {
        $this->track = $track;
    }

    /**
     * Returns Bars.
     * The time intervals of the bars throughout the track. A bar (or measure) is a segment of time defined
     * as a given number of beats.
     *
     * @return TimeIntervalObject[]|null
     */
    public function getBars(): ?array
    {
        return $this->bars;
    }

    /**
     * Sets Bars.
     * The time intervals of the bars throughout the track. A bar (or measure) is a segment of time defined
     * as a given number of beats.
     *
     * @maps bars
     *
     * @param TimeIntervalObject[]|null $bars
     */
    public function setBars(?array $bars): void
    {
        $this->bars = $bars;
    }

    /**
     * Returns Beats.
     * The time intervals of beats throughout the track. A beat is the basic time unit of a piece of music;
     * for example, each tick of a metronome. Beats are typically multiples of tatums.
     *
     * @return TimeIntervalObject[]|null
     */
    public function getBeats(): ?array
    {
        return $this->beats;
    }

    /**
     * Sets Beats.
     * The time intervals of beats throughout the track. A beat is the basic time unit of a piece of music;
     * for example, each tick of a metronome. Beats are typically multiples of tatums.
     *
     * @maps beats
     *
     * @param TimeIntervalObject[]|null $beats
     */
    public function setBeats(?array $beats): void
    {
        $this->beats = $beats;
    }

    /**
     * Returns Sections.
     * Sections are defined by large variations in rhythm or timbre, e.g. chorus, verse, bridge, guitar
     * solo, etc. Each section contains its own descriptions of tempo, key, mode, time_signature, and
     * loudness.
     *
     * @return SectionObject[]|null
     */
    public function getSections(): ?array
    {
        return $this->sections;
    }

    /**
     * Sets Sections.
     * Sections are defined by large variations in rhythm or timbre, e.g. chorus, verse, bridge, guitar
     * solo, etc. Each section contains its own descriptions of tempo, key, mode, time_signature, and
     * loudness.
     *
     * @maps sections
     *
     * @param SectionObject[]|null $sections
     */
    public function setSections(?array $sections): void
    {
        $this->sections = $sections;
    }

    /**
     * Returns Segments.
     * Each segment contains a roughly conisistent sound throughout its duration.
     *
     * @return SegmentObject[]|null
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * Sets Segments.
     * Each segment contains a roughly conisistent sound throughout its duration.
     *
     * @maps segments
     *
     * @param SegmentObject[]|null $segments
     */
    public function setSegments(?array $segments): void
    {
        $this->segments = $segments;
    }

    /**
     * Returns Tatums.
     * A tatum represents the lowest regular pulse train that a listener intuitively infers from the timing
     * of perceived musical events (segments).
     *
     * @return TimeIntervalObject[]|null
     */
    public function getTatums(): ?array
    {
        return $this->tatums;
    }

    /**
     * Sets Tatums.
     * A tatum represents the lowest regular pulse train that a listener intuitively infers from the timing
     * of perceived musical events (segments).
     *
     * @maps tatums
     *
     * @param TimeIntervalObject[]|null $tatums
     */
    public function setTatums(?array $tatums): void
    {
        $this->tatums = $tatums;
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
        if (isset($this->meta)) {
            $json['meta']     = $this->meta;
        }
        if (isset($this->track)) {
            $json['track']    = $this->track;
        }
        if (isset($this->bars)) {
            $json['bars']     = $this->bars;
        }
        if (isset($this->beats)) {
            $json['beats']    = $this->beats;
        }
        if (isset($this->sections)) {
            $json['sections'] = $this->sections;
        }
        if (isset($this->segments)) {
            $json['segments'] = $this->segments;
        }
        if (isset($this->tatums)) {
            $json['tatums']   = $this->tatums;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
