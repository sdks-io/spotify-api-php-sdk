
# Playlist User Object

## Structure

`PlaylistUserObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known public external URLs for this user. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `followers` | [`?FollowersObject`](../../doc/models/followers-object.md) | Optional | Information about the followers of this user. | getFollowers(): ?FollowersObject | setFollowers(?FollowersObject followers): void |
| `href` | `?string` | Optional | A link to the Web API endpoint for this user. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify user ID](/documentation/web-api/concepts/spotify-uris-ids) for this user. | getId(): ?string | setId(?string id): void |
| `type` | [`?string(Type4Enum)`](../../doc/models/type-4-enum.md) | Optional | The object type. | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for this user. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "external_urls": {
    "spotify": "spotify6"
  },
  "followers": {
    "href": "href0",
    "total": 82
  },
  "href": "href8",
  "id": "id6",
  "type": "user"
}
```

