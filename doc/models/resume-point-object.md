
# Resume Point Object

## Structure

`ResumePointObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fullyPlayed` | `?bool` | Optional | Whether or not the episode has been fully played by the user. | getFullyPlayed(): ?bool | setFullyPlayed(?bool fullyPlayed): void |
| `resumePositionMs` | `?int` | Optional | The user's most recent position in the episode in milliseconds. | getResumePositionMs(): ?int | setResumePositionMs(?int resumePositionMs): void |

## Example (as JSON)

```json
{
  "fully_played": false,
  "resume_position_ms": 150
}
```

