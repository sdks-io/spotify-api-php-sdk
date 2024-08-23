
# Queue Object

## Structure

`QueueObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentlyPlaying` | `?array` | Optional | The currently playing track or episode. Can be `null`. | getCurrentlyPlaying(): ?array | setCurrentlyPlaying(?array currentlyPlaying): void |
| `queue` | `?(array[])` | Optional | The tracks or episodes in the queue. Can be empty. | getQueue(): ?array | setQueue(?array queue): void |

## Example (as JSON)

```json
{
  "currently_playing": {
    "key1": "val1",
    "key2": "val2"
  },
  "queue": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ]
}
```

