
# Cursor Paging Simplified Artist Object

## Structure

`CursorPagingSimplifiedArtistObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `href` | `?string` | Optional | A link to the Web API endpoint returning the full result of the request. | getHref(): ?string | setHref(?string href): void |
| `limit` | `?int` | Optional | The maximum number of items in the response (as set in the query or by default). | getLimit(): ?int | setLimit(?int limit): void |
| `next` | `?string` | Optional | URL to the next page of items. ( `null` if none) | getNext(): ?string | setNext(?string next): void |
| `cursors` | [`?CursorObject`](../../doc/models/cursor-object.md) | Optional | The cursors used to find the next set of items. | getCursors(): ?CursorObject | setCursors(?CursorObject cursors): void |
| `total` | `?int` | Optional | The total number of items available to return. | getTotal(): ?int | setTotal(?int total): void |
| `items` | [`?(ArtistObject[])`](../../doc/models/artist-object.md) | Optional | - | getItems(): ?array | setItems(?array items): void |

## Example (as JSON)

```json
{
  "href": "href2",
  "limit": 160,
  "next": "next8",
  "cursors": {
    "after": "after8",
    "before": "before6"
  },
  "total": 254
}
```

