
# Context Object

## Structure

`ContextObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | The object type, e.g. "artist", "playlist", "album", "show". | getType(): ?string | setType(?string type): void |
| `href` | `?string` | Optional | A link to the Web API endpoint providing full details of the track. | getHref(): ?string | setHref(?string href): void |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | External URLs for this context. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the context. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "type": "type6",
  "href": "href6",
  "external_urls": {
    "spotify": "spotify6"
  },
  "uri": "uri8"
}
```

