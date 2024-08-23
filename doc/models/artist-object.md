
# Artist Object

## Structure

`ArtistObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known external URLs for this artist. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `followers` | [`?FollowersObject`](../../doc/models/followers-object.md) | Optional | Information about the followers of the artist. | getFollowers(): ?FollowersObject | setFollowers(?FollowersObject followers): void |
| `genres` | `?(string[])` | Optional | A list of the genres the artist is associated with. If not yet classified, the array is empty. | getGenres(): ?array | setGenres(?array genres): void |
| `href` | `?string` | Optional | A link to the Web API endpoint providing full details of the artist. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the artist. | getId(): ?string | setId(?string id): void |
| `images` | [`?(ImageObject[])`](../../doc/models/image-object.md) | Optional | Images of the artist in various sizes, widest first. | getImages(): ?array | setImages(?array images): void |
| `name` | `?string` | Optional | The name of the artist. | getName(): ?string | setName(?string name): void |
| `popularity` | `?int` | Optional | The popularity of the artist. The value will be between 0 and 100, with 100 being the most popular. The artist's popularity is calculated from the popularity of all the artist's tracks. | getPopularity(): ?int | setPopularity(?int popularity): void |
| `type` | [`?string(TypeEnum)`](../../doc/models/type-enum.md) | Optional | The object type. | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the artist. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "genres": [
    "Prog rock",
    "Grunge"
  ],
  "external_urls": {
    "spotify": "spotify6"
  },
  "followers": {
    "href": "href0",
    "total": 82
  },
  "href": "href8",
  "id": "id0"
}
```

