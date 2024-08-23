
# Many Artists

## Structure

`ManyArtists`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `artists` | [`ArtistObject[]`](../../doc/models/artist-object.md) | Required | - | getArtists(): array | setArtists(array artists): void |

## Example (as JSON)

```json
{
  "artists": [
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
      "href": "href2",
      "id": "id0"
    }
  ]
}
```

