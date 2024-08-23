
# Playlist Tracks Ref Object

## Structure

`PlaylistTracksRefObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `href` | `?string` | Optional | A link to the Web API endpoint where full details of the playlist's tracks can be retrieved. | getHref(): ?string | setHref(?string href): void |
| `total` | `?int` | Optional | Number of tracks in the playlist. | getTotal(): ?int | setTotal(?int total): void |

## Example (as JSON)

```json
{
  "href": "href0",
  "total": 128
}
```

