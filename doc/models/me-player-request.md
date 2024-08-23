
# Me Player Request

## Structure

`MePlayerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | `string[]` | Required | A JSON array containing the ID of the device on which playback should be started/transferred.<br/>For example:`{device_ids:["74ASZWbe4lXaubB36ztrGX"]}`<br/>_**Note**: Although an array is accepted, only a single device_id is currently supported. Supplying more than one will return `400 Bad Request`_ | getDeviceIds(): array | setDeviceIds(array deviceIds): void |
| `play` | `?bool` | Optional | **true**: ensure playback happens on new device.<br/>**false** or not provided: keep the current playback state. | getPlay(): ?bool | setPlay(?bool play): void |

## Example (as JSON)

```json
{
  "device_ids": [
    "74ASZWbe4lXaubB36ztrGX"
  ],
  "play": false
}
```

