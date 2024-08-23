
# Currently Playing Context Object

## Structure

`CurrentlyPlayingContextObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `device` | [`?DeviceObject`](../../doc/models/device-object.md) | Optional | The device that is currently active. | getDevice(): ?DeviceObject | setDevice(?DeviceObject device): void |
| `repeatState` | `?string` | Optional | off, track, context | getRepeatState(): ?string | setRepeatState(?string repeatState): void |
| `shuffleState` | `?bool` | Optional | If shuffle is on or off. | getShuffleState(): ?bool | setShuffleState(?bool shuffleState): void |
| `context` | [`?ContextObject`](../../doc/models/context-object.md) | Optional | A Context Object. Can be `null`. | getContext(): ?ContextObject | setContext(?ContextObject context): void |
| `timestamp` | `?int` | Optional | Unix Millisecond Timestamp when data was fetched. | getTimestamp(): ?int | setTimestamp(?int timestamp): void |
| `progressMs` | `?int` | Optional | Progress into the currently playing track or episode. Can be `null`. | getProgressMs(): ?int | setProgressMs(?int progressMs): void |
| `isPlaying` | `?bool` | Optional | If something is currently playing, return `true`. | getIsPlaying(): ?bool | setIsPlaying(?bool isPlaying): void |
| `item` | `?array` | Optional | The currently playing track or episode. Can be `null`. | getItem(): ?array | setItem(?array item): void |
| `currentlyPlayingType` | `?string` | Optional | The object type of the currently playing item. Can be one of `track`, `episode`, `ad` or `unknown`. | getCurrentlyPlayingType(): ?string | setCurrentlyPlayingType(?string currentlyPlayingType): void |
| `actions` | [`?DisallowsObject`](../../doc/models/disallows-object.md) | Optional | Allows to update the user interface based on which playback actions are available within the current context. | getActions(): ?DisallowsObject | setActions(?DisallowsObject actions): void |

## Example (as JSON)

```json
{
  "device": {
    "id": "id6",
    "is_active": false,
    "is_private_session": false,
    "is_restricted": false,
    "name": "name6"
  },
  "repeat_state": "repeat_state6",
  "shuffle_state": false,
  "context": {
    "type": "type8",
    "href": "href4",
    "external_urls": {
      "spotify": "spotify6"
    },
    "uri": "uri6"
  },
  "timestamp": 48
}
```

