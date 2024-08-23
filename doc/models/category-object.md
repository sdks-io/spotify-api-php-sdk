
# Category Object

## Structure

`CategoryObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `href` | `string` | Required | A link to the Web API endpoint returning full details of the category. | getHref(): string | setHref(string href): void |
| `icons` | [`ImageObject[]`](../../doc/models/image-object.md) | Required | The category icon, in various sizes. | getIcons(): array | setIcons(array icons): void |
| `id` | `string` | Required | The [Spotify category ID](/documentation/web-api/concepts/spotify-uris-ids) of the category. | getId(): string | setId(string id): void |
| `name` | `string` | Required | The name of the category. | getName(): string | setName(string name): void |

## Example (as JSON)

```json
{
  "href": "href0",
  "icons": [
    {
      "url": "https://i.scdn.co/image/ab67616d00001e02ff9ca10b55ce82ae553c8228\n",
      "height": 300,
      "width": 300
    }
  ],
  "id": "equal",
  "name": "EQUAL"
}
```

