
# Recommendation Seed Object

## Structure

`RecommendationSeedObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `afterFilteringSize` | `?int` | Optional | The number of tracks available after min\_\* and max\_\* filters have been applied. | getAfterFilteringSize(): ?int | setAfterFilteringSize(?int afterFilteringSize): void |
| `afterRelinkingSize` | `?int` | Optional | The number of tracks available after relinking for regional availability. | getAfterRelinkingSize(): ?int | setAfterRelinkingSize(?int afterRelinkingSize): void |
| `href` | `?string` | Optional | A link to the full track or artist data for this seed. For tracks this will be a link to a Track Object. For artists a link to an Artist Object. For genre seeds, this value will be `null`. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The id used to select this seed. This will be the same as the string used in the `seed_artists`, `seed_tracks` or `seed_genres` parameter. | getId(): ?string | setId(?string id): void |
| `initialPoolSize` | `?int` | Optional | The number of recommended tracks available for this seed. | getInitialPoolSize(): ?int | setInitialPoolSize(?int initialPoolSize): void |
| `type` | `?string` | Optional | The entity type of this seed. One of `artist`, `track` or `genre`. | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "afterFilteringSize": 208,
  "afterRelinkingSize": 228,
  "href": "href4",
  "id": "id2",
  "initialPoolSize": 214
}
```

