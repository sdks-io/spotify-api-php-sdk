<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models;

use stdClass;

class SimplifiedAlbumObject implements \JsonSerializable
{
    /**
     * @var string
     */
    private $albumType;

    /**
     * @var int
     */
    private $totalTracks;

    /**
     * @var string[]
     */
    private $availableMarkets;

    /**
     * @var ExternalUrlObject
     */
    private $externalUrls;

    /**
     * @var string
     */
    private $href;

    /**
     * @var string
     */
    private $id;

    /**
     * @var ImageObject[]
     */
    private $images;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $releaseDatePrecision;

    /**
     * @var AlbumRestrictionObject|null
     */
    private $restrictions;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var SimplifiedArtistObject[]
     */
    private $artists;

    /**
     * @param string $albumType
     * @param int $totalTracks
     * @param string[] $availableMarkets
     * @param ExternalUrlObject $externalUrls
     * @param string $href
     * @param string $id
     * @param ImageObject[] $images
     * @param string $name
     * @param string $releaseDate
     * @param string $releaseDatePrecision
     * @param string $type
     * @param string $uri
     * @param SimplifiedArtistObject[] $artists
     */
    public function __construct(
        string $albumType,
        int $totalTracks,
        array $availableMarkets,
        ExternalUrlObject $externalUrls,
        string $href,
        string $id,
        array $images,
        string $name,
        string $releaseDate,
        string $releaseDatePrecision,
        string $type,
        string $uri,
        array $artists
    ) {
        $this->albumType = $albumType;
        $this->totalTracks = $totalTracks;
        $this->availableMarkets = $availableMarkets;
        $this->externalUrls = $externalUrls;
        $this->href = $href;
        $this->id = $id;
        $this->images = $images;
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->releaseDatePrecision = $releaseDatePrecision;
        $this->type = $type;
        $this->uri = $uri;
        $this->artists = $artists;
    }

    /**
     * Returns Album Type.
     * The type of the album.
     */
    public function getAlbumType(): string
    {
        return $this->albumType;
    }

    /**
     * Sets Album Type.
     * The type of the album.
     *
     * @required
     * @maps album_type
     * @factory \SpotifyWebAPILib\Models\AlbumTypeEnum::checkValue
     */
    public function setAlbumType(string $albumType): void
    {
        $this->albumType = $albumType;
    }

    /**
     * Returns Total Tracks.
     * The number of tracks in the album.
     */
    public function getTotalTracks(): int
    {
        return $this->totalTracks;
    }

    /**
     * Sets Total Tracks.
     * The number of tracks in the album.
     *
     * @required
     * @maps total_tracks
     */
    public function setTotalTracks(int $totalTracks): void
    {
        $this->totalTracks = $totalTracks;
    }

    /**
     * Returns Available Markets.
     * The markets in which the album is available: [ISO 3166-1 alpha-2 country codes](http://en.wikipedia.
     * org/wiki/ISO_3166-1_alpha-2). _**NOTE**: an album is considered available in a market when at least
     * 1 of its tracks is available in that market._
     *
     * @return string[]
     */
    public function getAvailableMarkets(): array
    {
        return $this->availableMarkets;
    }

    /**
     * Sets Available Markets.
     * The markets in which the album is available: [ISO 3166-1 alpha-2 country codes](http://en.wikipedia.
     * org/wiki/ISO_3166-1_alpha-2). _**NOTE**: an album is considered available in a market when at least
     * 1 of its tracks is available in that market._
     *
     * @required
     * @maps available_markets
     *
     * @param string[] $availableMarkets
     */
    public function setAvailableMarkets(array $availableMarkets): void
    {
        $this->availableMarkets = $availableMarkets;
    }

    /**
     * Returns External Urls.
     * Known external URLs for this album.
     */
    public function getExternalUrls(): ExternalUrlObject
    {
        return $this->externalUrls;
    }

    /**
     * Sets External Urls.
     * Known external URLs for this album.
     *
     * @required
     * @maps external_urls
     */
    public function setExternalUrls(ExternalUrlObject $externalUrls): void
    {
        $this->externalUrls = $externalUrls;
    }

    /**
     * Returns Href.
     * A link to the Web API endpoint providing full details of the album.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * Sets Href.
     * A link to the Web API endpoint providing full details of the album.
     *
     * @required
     * @maps href
     */
    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    /**
     * Returns Id.
     * The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the album.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the album.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Images.
     * The cover art for the album in various sizes, widest first.
     *
     * @return ImageObject[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * Sets Images.
     * The cover art for the album in various sizes, widest first.
     *
     * @required
     * @maps images
     *
     * @param ImageObject[] $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * Returns Name.
     * The name of the album. In case of an album takedown, the value may be an empty string.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the album. In case of an album takedown, the value may be an empty string.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Release Date.
     * The date the album was first released.
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * Sets Release Date.
     * The date the album was first released.
     *
     * @required
     * @maps release_date
     */
    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * Returns Release Date Precision.
     * The precision with which `release_date` value is known.
     */
    public function getReleaseDatePrecision(): string
    {
        return $this->releaseDatePrecision;
    }

    /**
     * Sets Release Date Precision.
     * The precision with which `release_date` value is known.
     *
     * @required
     * @maps release_date_precision
     * @factory \SpotifyWebAPILib\Models\ReleaseDatePrecisionEnum::checkValue
     */
    public function setReleaseDatePrecision(string $releaseDatePrecision): void
    {
        $this->releaseDatePrecision = $releaseDatePrecision;
    }

    /**
     * Returns Restrictions.
     * Included in the response when a content restriction is applied.
     */
    public function getRestrictions(): ?AlbumRestrictionObject
    {
        return $this->restrictions;
    }

    /**
     * Sets Restrictions.
     * Included in the response when a content restriction is applied.
     *
     * @maps restrictions
     */
    public function setRestrictions(?AlbumRestrictionObject $restrictions): void
    {
        $this->restrictions = $restrictions;
    }

    /**
     * Returns Type.
     * The object type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The object type.
     *
     * @required
     * @maps type
     * @factory \SpotifyWebAPILib\Models\Type2Enum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Uri.
     * The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the album.
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Sets Uri.
     * The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the album.
     *
     * @required
     * @maps uri
     */
    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    /**
     * Returns Artists.
     * The artists of the album. Each artist object includes a link in `href` to more detailed information
     * about the artist.
     *
     * @return SimplifiedArtistObject[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * Sets Artists.
     * The artists of the album. Each artist object includes a link in `href` to more detailed information
     * about the artist.
     *
     * @required
     * @maps artists
     *
     * @param SimplifiedArtistObject[] $artists
     */
    public function setArtists(array $artists): void
    {
        $this->artists = $artists;
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
        $json['album_type']             = AlbumTypeEnum::checkValue($this->albumType);
        $json['total_tracks']           = $this->totalTracks;
        $json['available_markets']      = $this->availableMarkets;
        $json['external_urls']          = $this->externalUrls;
        $json['href']                   = $this->href;
        $json['id']                     = $this->id;
        $json['images']                 = $this->images;
        $json['name']                   = $this->name;
        $json['release_date']           = $this->releaseDate;
        $json['release_date_precision'] = ReleaseDatePrecisionEnum::checkValue($this->releaseDatePrecision);
        if (isset($this->restrictions)) {
            $json['restrictions']       = $this->restrictions;
        }
        $json['type']                   = Type2Enum::checkValue($this->type);
        $json['uri']                    = $this->uri;
        $json['artists']                = $this->artists;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
