
# Explicit Content Settings Object

## Structure

`ExplicitContentSettingsObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterEnabled` | `?bool` | Optional | When `true`, indicates that explicit content should not be played. | getFilterEnabled(): ?bool | setFilterEnabled(?bool filterEnabled): void |
| `filterLocked` | `?bool` | Optional | When `true`, indicates that the explicit content setting is locked and can't be changed by the user. | getFilterLocked(): ?bool | setFilterLocked(?bool filterLocked): void |

## Example (as JSON)

```json
{
  "filter_enabled": false,
  "filter_locked": false
}
```

