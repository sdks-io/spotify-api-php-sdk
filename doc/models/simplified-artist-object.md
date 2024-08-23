
# Simplified Artist Object

## Structure

`SimplifiedArtistObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known external URLs for this artist. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `href` | `?string` | Optional | A link to the Web API endpoint providing full details of the artist. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the artist. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | The name of the artist. | getName(): ?string | setName(?string name): void |
| `type` | [`?string(TypeEnum)`](../../doc/models/type-enum.md) | Optional | The object type. | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the artist. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "external_urls": {
    "spotify": "spotify6"
  },
  "href": "href6",
  "id": "id4",
  "name": "name4",
  "type": "artist"
}
```

