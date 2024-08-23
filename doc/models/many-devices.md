
# Many Devices

## Structure

`ManyDevices`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devices` | [`DeviceObject[]`](../../doc/models/device-object.md) | Required | - | getDevices(): array | setDevices(array devices): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "name": "Kitchen speaker",
      "type": "computer",
      "volume_percent": 59,
      "id": "id4",
      "is_active": false,
      "is_private_session": false,
      "is_restricted": false
    }
  ]
}
```

