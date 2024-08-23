
# Cursor Object

## Structure

`CursorObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `after` | `?string` | Optional | The cursor to use as key to find the next page of items. | getAfter(): ?string | setAfter(?string after): void |
| `before` | `?string` | Optional | The cursor to use as key to find the previous page of items. | getBefore(): ?string | setBefore(?string before): void |

## Example (as JSON)

```json
{
  "after": "after2",
  "before": "before0"
}
```

