
# Paging Featured Playlist Object

## Structure

`PagingFeaturedPlaylistObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | The localized message of a playlist. | getMessage(): ?string | setMessage(?string message): void |
| `playlists` | [`?PagingPlaylistObject`](../../doc/models/paging-playlist-object.md) | Optional | - | getPlaylists(): ?PagingPlaylistObject | setPlaylists(?PagingPlaylistObject playlists): void |

## Example (as JSON)

```json
{
  "message": "Popular Playlists",
  "playlists": {
    "href": "href2",
    "limit": 68,
    "next": "next2",
    "offset": 164,
    "previous": "previous8",
    "total": 162,
    "items": [
      {
        "collaborative": false,
        "description": "description2",
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "href0",
        "id": "id8"
      },
      {
        "collaborative": false,
        "description": "description2",
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "href0",
        "id": "id8"
      },
      {
        "collaborative": false,
        "description": "description2",
        "external_urls": {
          "spotify": "spotify6"
        },
        "href": "href0",
        "id": "id8"
      }
    ]
  }
}
```

