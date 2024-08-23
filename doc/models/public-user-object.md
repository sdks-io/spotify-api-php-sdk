
# Public User Object

## Structure

`PublicUserObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `displayName` | `?string` | Optional | The name displayed on the user's profile. `null` if not available. | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known public external URLs for this user. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `followers` | [`?FollowersObject`](../../doc/models/followers-object.md) | Optional | Information about the followers of this user. | getFollowers(): ?FollowersObject | setFollowers(?FollowersObject followers): void |
| `href` | `?string` | Optional | A link to the Web API endpoint for this user. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify user ID](/documentation/web-api/concepts/spotify-uris-ids) for this user. | getId(): ?string | setId(?string id): void |
| `images` | [`?(ImageObject[])`](../../doc/models/image-object.md) | Optional | The user's profile image. | getImages(): ?array | setImages(?array images): void |
| `type` | [`?string(Type4Enum)`](../../doc/models/type-4-enum.md) | Optional | The object type. | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for this user. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "display_name": "display_name6",
  "external_urls": {
    "spotify": "spotify6"
  },
  "followers": {
    "href": "href0",
    "total": 82
  },
  "href": "href8",
  "id": "id6"
}
```

