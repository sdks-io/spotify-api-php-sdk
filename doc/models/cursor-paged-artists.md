
# Cursor Paged Artists

## Structure

`CursorPagedArtists`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `artists` | [`CursorPagingSimplifiedArtistObject`](../../doc/models/cursor-paging-simplified-artist-object.md) | Required | - | getArtists(): CursorPagingSimplifiedArtistObject | setArtists(CursorPagingSimplifiedArtistObject artists): void |

## Example (as JSON)

```json
{
  "artists": {
    "href": "href2",
    "limit": 214,
    "next": "next2",
    "cursors": {
      "after": "after8",
      "before": "before6"
    },
    "total": 52
  }
}
```

