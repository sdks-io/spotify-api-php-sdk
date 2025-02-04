<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class Track implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $numSamples;

    /**
     * @var float|null
     */
    private $duration;

    /**
     * @var string|null
     */
    private $sampleMd5;

    /**
     * @var int|null
     */
    private $offsetSeconds;

    /**
     * @var int|null
     */
    private $windowSeconds;

    /**
     * @var int|null
     */
    private $analysisSampleRate;

    /**
     * @var int|null
     */
    private $analysisChannels;

    /**
     * @var float|null
     */
    private $endOfFadeIn;

    /**
     * @var float|null
     */
    private $startOfFadeOut;

    /**
     * @var float|null
     */
    private $loudness;

    /**
     * @var float|null
     */
    private $tempo;

    /**
     * @var float|null
     */
    private $tempoConfidence;

    /**
     * @var int|null
     */
    private $timeSignature;

    /**
     * @var float|null
     */
    private $timeSignatureConfidence;

    /**
     * @var int|null
     */
    private $key;

    /**
     * @var float|null
     */
    private $keyConfidence;

    /**
     * @var int|null
     */
    private $mode;

    /**
     * @var float|null
     */
    private $modeConfidence;

    /**
     * @var string|null
     */
    private $codestring;

    /**
     * @var float|null
     */
    private $codeVersion;

    /**
     * @var string|null
     */
    private $echoprintstring;

    /**
     * @var float|null
     */
    private $echoprintVersion;

    /**
     * @var string|null
     */
    private $synchstring;

    /**
     * @var float|null
     */
    private $synchVersion;

    /**
     * @var string|null
     */
    private $rhythmstring;

    /**
     * @var float|null
     */
    private $rhythmVersion;

    /**
     * Returns Num Samples.
     * The exact number of audio samples analyzed from this track. See also `analysis_sample_rate`.
     */
    public function getNumSamples(): ?int
    {
        return $this->numSamples;
    }

    /**
     * Sets Num Samples.
     * The exact number of audio samples analyzed from this track. See also `analysis_sample_rate`.
     *
     * @maps num_samples
     */
    public function setNumSamples(?int $numSamples): void
    {
        $this->numSamples = $numSamples;
    }

    /**
     * Returns Duration.
     * Length of the track in seconds.
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * Sets Duration.
     * Length of the track in seconds.
     *
     * @maps duration
     */
    public function setDuration(?float $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Returns Sample Md 5.
     * This field will always contain the empty string.
     */
    public function getSampleMd5(): ?string
    {
        return $this->sampleMd5;
    }

    /**
     * Sets Sample Md 5.
     * This field will always contain the empty string.
     *
     * @maps sample_md5
     */
    public function setSampleMd5(?string $sampleMd5): void
    {
        $this->sampleMd5 = $sampleMd5;
    }

    /**
     * Returns Offset Seconds.
     * An offset to the start of the region of the track that was analyzed. (As the entire track is
     * analyzed, this should always be 0.)
     */
    public function getOffsetSeconds(): ?int
    {
        return $this->offsetSeconds;
    }

    /**
     * Sets Offset Seconds.
     * An offset to the start of the region of the track that was analyzed. (As the entire track is
     * analyzed, this should always be 0.)
     *
     * @maps offset_seconds
     */
    public function setOffsetSeconds(?int $offsetSeconds): void
    {
        $this->offsetSeconds = $offsetSeconds;
    }

    /**
     * Returns Window Seconds.
     * The length of the region of the track was analyzed, if a subset of the track was analyzed. (As the
     * entire track is analyzed, this should always be 0.)
     */
    public function getWindowSeconds(): ?int
    {
        return $this->windowSeconds;
    }

    /**
     * Sets Window Seconds.
     * The length of the region of the track was analyzed, if a subset of the track was analyzed. (As the
     * entire track is analyzed, this should always be 0.)
     *
     * @maps window_seconds
     */
    public function setWindowSeconds(?int $windowSeconds): void
    {
        $this->windowSeconds = $windowSeconds;
    }

    /**
     * Returns Analysis Sample Rate.
     * The sample rate used to decode and analyze this track. May differ from the actual sample rate of
     * this track available on Spotify.
     */
    public function getAnalysisSampleRate(): ?int
    {
        return $this->analysisSampleRate;
    }

    /**
     * Sets Analysis Sample Rate.
     * The sample rate used to decode and analyze this track. May differ from the actual sample rate of
     * this track available on Spotify.
     *
     * @maps analysis_sample_rate
     */
    public function setAnalysisSampleRate(?int $analysisSampleRate): void
    {
        $this->analysisSampleRate = $analysisSampleRate;
    }

    /**
     * Returns Analysis Channels.
     * The number of channels used for analysis. If 1, all channels are summed together to mono before
     * analysis.
     */
    public function getAnalysisChannels(): ?int
    {
        return $this->analysisChannels;
    }

    /**
     * Sets Analysis Channels.
     * The number of channels used for analysis. If 1, all channels are summed together to mono before
     * analysis.
     *
     * @maps analysis_channels
     */
    public function setAnalysisChannels(?int $analysisChannels): void
    {
        $this->analysisChannels = $analysisChannels;
    }

    /**
     * Returns End of Fade In.
     * The time, in seconds, at which the track's fade-in period ends. If the track has no fade-in, this
     * will be 0.0.
     */
    public function getEndOfFadeIn(): ?float
    {
        return $this->endOfFadeIn;
    }

    /**
     * Sets End of Fade In.
     * The time, in seconds, at which the track's fade-in period ends. If the track has no fade-in, this
     * will be 0.0.
     *
     * @maps end_of_fade_in
     */
    public function setEndOfFadeIn(?float $endOfFadeIn): void
    {
        $this->endOfFadeIn = $endOfFadeIn;
    }

    /**
     * Returns Start of Fade Out.
     * The time, in seconds, at which the track's fade-out period starts. If the track has no fade-out,
     * this should match the track's length.
     */
    public function getStartOfFadeOut(): ?float
    {
        return $this->startOfFadeOut;
    }

    /**
     * Sets Start of Fade Out.
     * The time, in seconds, at which the track's fade-out period starts. If the track has no fade-out,
     * this should match the track's length.
     *
     * @maps start_of_fade_out
     */
    public function setStartOfFadeOut(?float $startOfFadeOut): void
    {
        $this->startOfFadeOut = $startOfFadeOut;
    }

    /**
     * Returns Loudness.
     * The overall loudness of a track in decibels (dB). Loudness values are averaged across the entire
     * track and are useful for comparing relative loudness of tracks. Loudness is the quality of a sound
     * that is the primary psychological correlate of physical strength (amplitude). Values typically range
     * between -60 and 0 db.
     */
    public function getLoudness(): ?float
    {
        return $this->loudness;
    }

    /**
     * Sets Loudness.
     * The overall loudness of a track in decibels (dB). Loudness values are averaged across the entire
     * track and are useful for comparing relative loudness of tracks. Loudness is the quality of a sound
     * that is the primary psychological correlate of physical strength (amplitude). Values typically range
     * between -60 and 0 db.
     *
     * @maps loudness
     */
    public function setLoudness(?float $loudness): void
    {
        $this->loudness = $loudness;
    }

    /**
     * Returns Tempo.
     * The overall estimated tempo of a track in beats per minute (BPM). In musical terminology, tempo is
     * the speed or pace of a given piece and derives directly from the average beat duration.
     */
    public function getTempo(): ?float
    {
        return $this->tempo;
    }

    /**
     * Sets Tempo.
     * The overall estimated tempo of a track in beats per minute (BPM). In musical terminology, tempo is
     * the speed or pace of a given piece and derives directly from the average beat duration.
     *
     * @maps tempo
     */
    public function setTempo(?float $tempo): void
    {
        $this->tempo = $tempo;
    }

    /**
     * Returns Tempo Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `tempo`.
     */
    public function getTempoConfidence(): ?float
    {
        return $this->tempoConfidence;
    }

    /**
     * Sets Tempo Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `tempo`.
     *
     * @maps tempo_confidence
     */
    public function setTempoConfidence(?float $tempoConfidence): void
    {
        $this->tempoConfidence = $tempoConfidence;
    }

    /**
     * Returns Time Signature.
     * An estimated time signature. The time signature (meter) is a notational convention to specify how
     * many beats are in each bar (or measure). The time signature ranges from 3 to 7 indicating time
     * signatures of "3/4", to "7/4".
     */
    public function getTimeSignature(): ?int
    {
        return $this->timeSignature;
    }

    /**
     * Sets Time Signature.
     * An estimated time signature. The time signature (meter) is a notational convention to specify how
     * many beats are in each bar (or measure). The time signature ranges from 3 to 7 indicating time
     * signatures of "3/4", to "7/4".
     *
     * @maps time_signature
     */
    public function setTimeSignature(?int $timeSignature): void
    {
        $this->timeSignature = $timeSignature;
    }

    /**
     * Returns Time Signature Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `time_signature`.
     */
    public function getTimeSignatureConfidence(): ?float
    {
        return $this->timeSignatureConfidence;
    }

    /**
     * Sets Time Signature Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `time_signature`.
     *
     * @maps time_signature_confidence
     */
    public function setTimeSignatureConfidence(?float $timeSignatureConfidence): void
    {
        $this->timeSignatureConfidence = $timeSignatureConfidence;
    }

    /**
     * Returns Key.
     * The key the track is in. Integers map to pitches using standard [Pitch Class notation](https://en.
     * wikipedia.org/wiki/Pitch_class). E.g. 0 = C, 1 = C♯/D♭, 2 = D, and so on. If no key was detected,
     * the value is -1.
     */
    public function getKey(): ?int
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * The key the track is in. Integers map to pitches using standard [Pitch Class notation](https://en.
     * wikipedia.org/wiki/Pitch_class). E.g. 0 = C, 1 = C♯/D♭, 2 = D, and so on. If no key was detected,
     * the value is -1.
     *
     * @maps key
     */
    public function setKey(?int $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Key Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `key`.
     */
    public function getKeyConfidence(): ?float
    {
        return $this->keyConfidence;
    }

    /**
     * Sets Key Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `key`.
     *
     * @maps key_confidence
     */
    public function setKeyConfidence(?float $keyConfidence): void
    {
        $this->keyConfidence = $keyConfidence;
    }

    /**
     * Returns Mode.
     * Mode indicates the modality (major or minor) of a track, the type of scale from which its melodic
     * content is derived. Major is represented by 1 and minor is 0.
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Mode indicates the modality (major or minor) of a track, the type of scale from which its melodic
     * content is derived. Major is represented by 1 and minor is 0.
     *
     * @maps mode
     */
    public function setMode(?int $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Mode Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `mode`.
     */
    public function getModeConfidence(): ?float
    {
        return $this->modeConfidence;
    }

    /**
     * Sets Mode Confidence.
     * The confidence, from 0.0 to 1.0, of the reliability of the `mode`.
     *
     * @maps mode_confidence
     */
    public function setModeConfidence(?float $modeConfidence): void
    {
        $this->modeConfidence = $modeConfidence;
    }

    /**
     * Returns Codestring.
     * An [Echo Nest Musical Fingerprint (ENMFP)](https://academiccommons.columbia.edu/doi/10.
     * 7916/D8Q248M4) codestring for this track.
     */
    public function getCodestring(): ?string
    {
        return $this->codestring;
    }

    /**
     * Sets Codestring.
     * An [Echo Nest Musical Fingerprint (ENMFP)](https://academiccommons.columbia.edu/doi/10.
     * 7916/D8Q248M4) codestring for this track.
     *
     * @maps codestring
     */
    public function setCodestring(?string $codestring): void
    {
        $this->codestring = $codestring;
    }

    /**
     * Returns Code Version.
     * A version number for the Echo Nest Musical Fingerprint format used in the codestring field.
     */
    public function getCodeVersion(): ?float
    {
        return $this->codeVersion;
    }

    /**
     * Sets Code Version.
     * A version number for the Echo Nest Musical Fingerprint format used in the codestring field.
     *
     * @maps code_version
     */
    public function setCodeVersion(?float $codeVersion): void
    {
        $this->codeVersion = $codeVersion;
    }

    /**
     * Returns Echoprintstring.
     * An [EchoPrint](https://github.com/spotify/echoprint-codegen) codestring for this track.
     */
    public function getEchoprintstring(): ?string
    {
        return $this->echoprintstring;
    }

    /**
     * Sets Echoprintstring.
     * An [EchoPrint](https://github.com/spotify/echoprint-codegen) codestring for this track.
     *
     * @maps echoprintstring
     */
    public function setEchoprintstring(?string $echoprintstring): void
    {
        $this->echoprintstring = $echoprintstring;
    }

    /**
     * Returns Echoprint Version.
     * A version number for the EchoPrint format used in the echoprintstring field.
     */
    public function getEchoprintVersion(): ?float
    {
        return $this->echoprintVersion;
    }

    /**
     * Sets Echoprint Version.
     * A version number for the EchoPrint format used in the echoprintstring field.
     *
     * @maps echoprint_version
     */
    public function setEchoprintVersion(?float $echoprintVersion): void
    {
        $this->echoprintVersion = $echoprintVersion;
    }

    /**
     * Returns Synchstring.
     * A [Synchstring](https://github.com/echonest/synchdata) for this track.
     */
    public function getSynchstring(): ?string
    {
        return $this->synchstring;
    }

    /**
     * Sets Synchstring.
     * A [Synchstring](https://github.com/echonest/synchdata) for this track.
     *
     * @maps synchstring
     */
    public function setSynchstring(?string $synchstring): void
    {
        $this->synchstring = $synchstring;
    }

    /**
     * Returns Synch Version.
     * A version number for the Synchstring used in the synchstring field.
     */
    public function getSynchVersion(): ?float
    {
        return $this->synchVersion;
    }

    /**
     * Sets Synch Version.
     * A version number for the Synchstring used in the synchstring field.
     *
     * @maps synch_version
     */
    public function setSynchVersion(?float $synchVersion): void
    {
        $this->synchVersion = $synchVersion;
    }

    /**
     * Returns Rhythmstring.
     * A Rhythmstring for this track. The format of this string is similar to the Synchstring.
     */
    public function getRhythmstring(): ?string
    {
        return $this->rhythmstring;
    }

    /**
     * Sets Rhythmstring.
     * A Rhythmstring for this track. The format of this string is similar to the Synchstring.
     *
     * @maps rhythmstring
     */
    public function setRhythmstring(?string $rhythmstring): void
    {
        $this->rhythmstring = $rhythmstring;
    }

    /**
     * Returns Rhythm Version.
     * A version number for the Rhythmstring used in the rhythmstring field.
     */
    public function getRhythmVersion(): ?float
    {
        return $this->rhythmVersion;
    }

    /**
     * Sets Rhythm Version.
     * A version number for the Rhythmstring used in the rhythmstring field.
     *
     * @maps rhythm_version
     */
    public function setRhythmVersion(?float $rhythmVersion): void
    {
        $this->rhythmVersion = $rhythmVersion;
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
        if (isset($this->numSamples)) {
            $json['num_samples']               = $this->numSamples;
        }
        if (isset($this->duration)) {
            $json['duration']                  = $this->duration;
        }
        if (isset($this->sampleMd5)) {
            $json['sample_md5']                = $this->sampleMd5;
        }
        if (isset($this->offsetSeconds)) {
            $json['offset_seconds']            = $this->offsetSeconds;
        }
        if (isset($this->windowSeconds)) {
            $json['window_seconds']            = $this->windowSeconds;
        }
        if (isset($this->analysisSampleRate)) {
            $json['analysis_sample_rate']      = $this->analysisSampleRate;
        }
        if (isset($this->analysisChannels)) {
            $json['analysis_channels']         = $this->analysisChannels;
        }
        if (isset($this->endOfFadeIn)) {
            $json['end_of_fade_in']            = $this->endOfFadeIn;
        }
        if (isset($this->startOfFadeOut)) {
            $json['start_of_fade_out']         = $this->startOfFadeOut;
        }
        if (isset($this->loudness)) {
            $json['loudness']                  = $this->loudness;
        }
        if (isset($this->tempo)) {
            $json['tempo']                     = $this->tempo;
        }
        if (isset($this->tempoConfidence)) {
            $json['tempo_confidence']          = $this->tempoConfidence;
        }
        if (isset($this->timeSignature)) {
            $json['time_signature']            = $this->timeSignature;
        }
        if (isset($this->timeSignatureConfidence)) {
            $json['time_signature_confidence'] = $this->timeSignatureConfidence;
        }
        if (isset($this->key)) {
            $json['key']                       = $this->key;
        }
        if (isset($this->keyConfidence)) {
            $json['key_confidence']            = $this->keyConfidence;
        }
        if (isset($this->mode)) {
            $json['mode']                      = $this->mode;
        }
        if (isset($this->modeConfidence)) {
            $json['mode_confidence']           = $this->modeConfidence;
        }
        if (isset($this->codestring)) {
            $json['codestring']                = $this->codestring;
        }
        if (isset($this->codeVersion)) {
            $json['code_version']              = $this->codeVersion;
        }
        if (isset($this->echoprintstring)) {
            $json['echoprintstring']           = $this->echoprintstring;
        }
        if (isset($this->echoprintVersion)) {
            $json['echoprint_version']         = $this->echoprintVersion;
        }
        if (isset($this->synchstring)) {
            $json['synchstring']               = $this->synchstring;
        }
        if (isset($this->synchVersion)) {
            $json['synch_version']             = $this->synchVersion;
        }
        if (isset($this->rhythmstring)) {
            $json['rhythmstring']              = $this->rhythmstring;
        }
        if (isset($this->rhythmVersion)) {
            $json['rhythm_version']            = $this->rhythmVersion;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
