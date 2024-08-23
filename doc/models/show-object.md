
# Show Object

## Structure

`ShowObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `availableMarkets` | `string[]` | Required | A list of the countries in which the show can be played, identified by their [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) code. | getAvailableMarkets(): array | setAvailableMarkets(array availableMarkets): void |
| `copyrights` | [`CopyrightObject[]`](../../doc/models/copyright-object.md) | Required | The copyright statements of the show. | getCopyrights(): array | setCopyrights(array copyrights): void |
| `description` | `string` | Required | A description of the show. HTML tags are stripped away from this field, use `html_description` field in case HTML tags are needed. | getDescription(): string | setDescription(string description): void |
| `htmlDescription` | `string` | Required | A description of the show. This field may contain HTML tags. | getHtmlDescription(): string | setHtmlDescription(string htmlDescription): void |
| `explicit` | `bool` | Required | Whether or not the show has explicit content (true = yes it does; false = no it does not OR unknown). | getExplicit(): bool | setExplicit(bool explicit): void |
| `externalUrls` | [`ExternalUrlObject`](../../doc/models/external-url-object.md) | Required | External URLs for this show. | getExternalUrls(): ExternalUrlObject | setExternalUrls(ExternalUrlObject externalUrls): void |
| `href` | `string` | Required | A link to the Web API endpoint providing full details of the show. | getHref(): string | setHref(string href): void |
| `id` | `string` | Required | The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the show. | getId(): string | setId(string id): void |
| `images` | [`ImageObject[]`](../../doc/models/image-object.md) | Required | The cover art for the show in various sizes, widest first. | getImages(): array | setImages(array images): void |
| `isExternallyHosted` | `bool` | Required | True if all of the shows episodes are hosted outside of Spotify's CDN. This field might be `null` in some cases. | getIsExternallyHosted(): bool | setIsExternallyHosted(bool isExternallyHosted): void |
| `languages` | `string[]` | Required | A list of the languages used in the show, identified by their [ISO 639](https://en.wikipedia.org/wiki/ISO_639) code. | getLanguages(): array | setLanguages(array languages): void |
| `mediaType` | `string` | Required | The media type of the show. | getMediaType(): string | setMediaType(string mediaType): void |
| `name` | `string` | Required | The name of the episode. | getName(): string | setName(string name): void |
| `publisher` | `string` | Required | The publisher of the show. | getPublisher(): string | setPublisher(string publisher): void |
| `type` | [`string(Type7Enum)`](../../doc/models/type-7-enum.md) | Required | The object type. | getType(): string | setType(string type): void |
| `uri` | `string` | Required | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the show. | getUri(): string | setUri(string uri): void |
| `totalEpisodes` | `int` | Required | The total number of episodes in the show. | getTotalEpisodes(): int | setTotalEpisodes(int totalEpisodes): void |
| `episodes` | [`PagingSimplifiedEpisodeObject`](../../doc/models/paging-simplified-episode-object.md) | Required | The episodes of the show. | getEpisodes(): PagingSimplifiedEpisodeObject | setEpisodes(PagingSimplifiedEpisodeObject episodes): void |

## Example (as JSON)

```json
{
  "available_markets": [
    "available_markets6"
  ],
  "copyrights": [
    {
      "text": "text2",
      "type": "type2"
    }
  ],
  "description": "description2",
  "html_description": "html_description8",
  "explicit": false,
  "external_urls": {
    "spotify": "spotify6"
  },
  "href": "href4",
  "id": "id2",
  "images": [
    {
      "url": "https://i.scdn.co/image/ab67616d00001e02ff9ca10b55ce82ae553c8228\n",
      "height": 300,
      "width": 300
    }
  ],
  "is_externally_hosted": false,
  "languages": [
    "languages9"
  ],
  "media_type": "media_type0",
  "name": "name2",
  "publisher": "publisher0",
  "type": "show",
  "uri": "uri6",
  "total_episodes": 54,
  "episodes": {
    "href": "https://api.spotify.com/v1/me/shows?offset=0&limit=20\n",
    "limit": 20,
    "next": "https://api.spotify.com/v1/me/shows?offset=1&limit=1",
    "offset": 0,
    "previous": "https://api.spotify.com/v1/me/shows?offset=1&limit=1",
    "total": 4,
    "items": [
      {
        "audio_preview_url": "https://p.scdn.co/mp3-preview/2f37da1d4221f40b9d1a98cd191f4d6f1646ad17",
        "description": "A Spotify podcast sharing fresh insights on important topics of the moment—in a way only Spotify can. You’ll hear from experts in the music, podcast and tech industries as we discover and uncover stories about our work and the world around us.\n",
        "html_description": "<p>A Spotify podcast sharing fresh insights on important topics of the moment—in a way only Spotify can. You’ll hear from experts in the music, podcast and tech industries as we discover and uncover stories about our work and the world around us.</p>\n",
        "duration_ms": 1686230,
        "explicit": false,
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "https://api.spotify.com/v1/episodes/5Xt5DXGzch68nYYamXrNxZ",
        "id": "5Xt5DXGzch68nYYamXrNxZ",
        "images": [
          {
            "url": "https://i.scdn.co/image/ab67616d00001e02ff9ca10b55ce82ae553c8228\n",
            "height": 300,
            "width": 300
          }
        ],
        "is_externally_hosted": false,
        "is_playable": false,
        "language": "en",
        "languages": [
          "fr",
          "en"
        ],
        "name": "Starting Your Own Podcast: Tips, Tricks, and Advice From Anchor Creators\n",
        "release_date": "1981-12-15",
        "release_date_precision": "day",
        "type": "episode",
        "uri": "spotify:episode:0zLhl3WsOCQHbe1BPTiHgr",
        "resume_point": {
          "fully_played": false,
          "resume_position_ms": 254
        },
        "restrictions": {
          "reason": "reason0"
        }
      }
    ]
  }
}
```

