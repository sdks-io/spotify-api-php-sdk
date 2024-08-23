
# Followers Object

## Structure

`FollowersObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `href` | `?string` | Optional | This will always be set to null, as the Web API does not support it at the moment. | getHref(): ?string | setHref(?string href): void |
| `total` | `?int` | Optional | The total number of followers. | getTotal(): ?int | setTotal(?int total): void |

## Example (as JSON)

```json
{
  "href": "href2",
  "total": 82
}
```

