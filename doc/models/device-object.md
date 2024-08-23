
# Device Object

## Structure

`DeviceObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The device ID. This ID is unique and persistent to some extent. However, this is not guaranteed and any cached `device_id` should periodically be cleared out and refetched as necessary. | getId(): ?string | setId(?string id): void |
| `isActive` | `?bool` | Optional | If this device is the currently active device. | getIsActive(): ?bool | setIsActive(?bool isActive): void |
| `isPrivateSession` | `?bool` | Optional | If this device is currently in a private session. | getIsPrivateSession(): ?bool | setIsPrivateSession(?bool isPrivateSession): void |
| `isRestricted` | `?bool` | Optional | Whether controlling this device is restricted. At present if this is "true" then no Web API commands will be accepted by this device. | getIsRestricted(): ?bool | setIsRestricted(?bool isRestricted): void |
| `name` | `?string` | Optional | A human-readable name for the device. Some devices have a name that the user can configure (e.g. \"Loudest speaker\") and some devices have a generic name associated with the manufacturer or device model. | getName(): ?string | setName(?string name): void |
| `type` | `?string` | Optional | Device type, such as "computer", "smartphone" or "speaker". | getType(): ?string | setType(?string type): void |
| `volumePercent` | `?int` | Optional | The current volume in percent.<br>**Constraints**: `>= 0`, `<= 100` | getVolumePercent(): ?int | setVolumePercent(?int volumePercent): void |
| `supportsVolume` | `?bool` | Optional | If this device can be used to set the volume. | getSupportsVolume(): ?bool | setSupportsVolume(?bool supportsVolume): void |

## Example (as JSON)

```json
{
  "name": "Kitchen speaker",
  "type": "computer",
  "volume_percent": 59,
  "id": "id4",
  "is_active": false,
  "is_private_session": false,
  "is_restricted": false
}
```

