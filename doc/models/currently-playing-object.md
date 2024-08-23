
# Currently Playing Object

## Structure

`CurrentlyPlayingObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `context` | [`?ContextObject`](../../doc/models/context-object.md) | Optional | A Context Object. Can be `null`. | getContext(): ?ContextObject | setContext(?ContextObject context): void |
| `timestamp` | `?int` | Optional | Unix Millisecond Timestamp when data was fetched | getTimestamp(): ?int | setTimestamp(?int timestamp): void |
| `progressMs` | `?int` | Optional | Progress into the currently playing track or episode. Can be `null`. | getProgressMs(): ?int | setProgressMs(?int progressMs): void |
| `isPlaying` | `?bool` | Optional | If something is currently playing, return `true`. | getIsPlaying(): ?bool | setIsPlaying(?bool isPlaying): void |
| `item` | `?array` | Optional | The currently playing track or episode. Can be `null`. | getItem(): ?array | setItem(?array item): void |
| `currentlyPlayingType` | `?string` | Optional | The object type of the currently playing item. Can be one of `track`, `episode`, `ad` or `unknown`. | getCurrentlyPlayingType(): ?string | setCurrentlyPlayingType(?string currentlyPlayingType): void |
| `actions` | [`?DisallowsObject`](../../doc/models/disallows-object.md) | Optional | Allows to update the user interface based on which playback actions are available within the current context. | getActions(): ?DisallowsObject | setActions(?DisallowsObject actions): void |

## Example (as JSON)

```json
{
  "context": {
    "type": "type8",
    "href": "href4",
    "external_urls": {
      "spotify": "spotify6"
    },
    "uri": "uri6"
  },
  "timestamp": 182,
  "progress_ms": 154,
  "is_playing": false,
  "item": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

