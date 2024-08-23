
# Track Object

## Structure

`TrackObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `album` | [`?SimplifiedAlbumObject`](../../doc/models/simplified-album-object.md) | Optional | The album on which the track appears. The album object includes a link in `href` to full information about the album. | getAlbum(): ?SimplifiedAlbumObject | setAlbum(?SimplifiedAlbumObject album): void |
| `artists` | [`?(ArtistObject[])`](../../doc/models/artist-object.md) | Optional | The artists who performed the track. Each artist object includes a link in `href` to more detailed information about the artist. | getArtists(): ?array | setArtists(?array artists): void |
| `availableMarkets` | `?(string[])` | Optional | A list of the countries in which the track can be played, identified by their [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) code. | getAvailableMarkets(): ?array | setAvailableMarkets(?array availableMarkets): void |
| `discNumber` | `?int` | Optional | The disc number (usually `1` unless the album consists of more than one disc). | getDiscNumber(): ?int | setDiscNumber(?int discNumber): void |
| `durationMs` | `?int` | Optional | The track length in milliseconds. | getDurationMs(): ?int | setDurationMs(?int durationMs): void |
| `explicit` | `?bool` | Optional | Whether or not the track has explicit lyrics ( `true` = yes it does; `false` = no it does not OR unknown). | getExplicit(): ?bool | setExplicit(?bool explicit): void |
| `externalIds` | [`?ExternalIdObject`](../../doc/models/external-id-object.md) | Optional | Known external IDs for the track. | getExternalIds(): ?ExternalIdObject | setExternalIds(?ExternalIdObject externalIds): void |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known external URLs for this track. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `href` | `?string` | Optional | A link to the Web API endpoint providing full details of the track. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the track. | getId(): ?string | setId(?string id): void |
| `isPlayable` | `?bool` | Optional | Part of the response when [Track Relinking](/documentation/web-api/concepts/track-relinking) is applied. If `true`, the track is playable in the given market. Otherwise `false`. | getIsPlayable(): ?bool | setIsPlayable(?bool isPlayable): void |
| `linkedFrom` | [`?LinkedTrackObject`](../../doc/models/linked-track-object.md) | Optional | Part of the response when [Track Relinking](/documentation/web-api/concepts/track-relinking) is applied, and the requested track has been replaced with different track. The track in the `linked_from` object contains information about the originally requested track. | getLinkedFrom(): ?LinkedTrackObject | setLinkedFrom(?LinkedTrackObject linkedFrom): void |
| `restrictions` | [`?TrackRestrictionObject`](../../doc/models/track-restriction-object.md) | Optional | Included in the response when a content restriction is applied. | getRestrictions(): ?TrackRestrictionObject | setRestrictions(?TrackRestrictionObject restrictions): void |
| `name` | `?string` | Optional | The name of the track. | getName(): ?string | setName(?string name): void |
| `popularity` | `?int` | Optional | The popularity of the track. The value will be between 0 and 100, with 100 being the most popular.<br/>The popularity of a track is a value between 0 and 100, with 100 being the most popular. The popularity is calculated by algorithm and is based, in the most part, on the total number of plays the track has had and how recent those plays are.<br/>Generally speaking, songs that are being played a lot now will have a higher popularity than songs that were played a lot in the past. Duplicate tracks (e.g. the same track from a single and an album) are rated independently. Artist and album popularity is derived mathematically from track popularity. _**Note**: the popularity value may lag actual popularity by a few days: the value is not updated in real time._ | getPopularity(): ?int | setPopularity(?int popularity): void |
| `previewUrl` | `?string` | Optional | A link to a 30 second preview (MP3 format) of the track. Can be `null` | getPreviewUrl(): ?string | setPreviewUrl(?string previewUrl): void |
| `trackNumber` | `?int` | Optional | The number of the track. If an album has several discs, the track number is the number on the specified disc. | getTrackNumber(): ?int | setTrackNumber(?int trackNumber): void |
| `type` | [`?string(Type3Enum)`](../../doc/models/type-3-enum.md) | Optional | The object type: "track". | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the track. | getUri(): ?string | setUri(?string uri): void |
| `isLocal` | `?bool` | Optional | Whether or not the track is from a local file. | getIsLocal(): ?bool | setIsLocal(?bool isLocal): void |

## Example (as JSON)

```json
{
  "album": {
    "album_type": "single",
    "total_tracks": 170,
    "available_markets": [
      "available_markets2",
      "available_markets3"
    ],
    "external_urls": {
      "spotify": "spotify6"
    },
    "href": "href0",
    "id": "id8",
    "images": [
      {
        "url": "url6",
        "height": 182,
        "width": 222
      }
    ],
    "name": "name8",
    "release_date": "release_date6",
    "release_date_precision": "day",
    "restrictions": {
      "reason": "explicit"
    },
    "type": "album",
    "uri": "uri2",
    "artists": [
      {
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "href2",
        "id": "id0",
        "name": "name0",
        "type": "artist"
      },
      {
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "href2",
        "id": "id0",
        "name": "name0",
        "type": "artist"
      }
    ]
  },
  "artists": [
    {
      "external_urls": {
        "spotify": "spotify6"
      },
      "followers": {
        "href": "href0",
        "total": 82
      },
      "genres": [
        "genres7",
        "genres8"
      ],
      "href": "href2",
      "id": "id0"
    },
    {
      "external_urls": {
        "spotify": "spotify6"
      },
      "followers": {
        "href": "href0",
        "total": 82
      },
      "genres": [
        "genres7",
        "genres8"
      ],
      "href": "href2",
      "id": "id0"
    }
  ],
  "available_markets": [
    "available_markets6",
    "available_markets7"
  ],
  "disc_number": 30,
  "duration_ms": 222
}
```

