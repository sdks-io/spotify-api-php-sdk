
# Image Object

## Structure

`ImageObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | The source URL of the image. | getUrl(): string | setUrl(string url): void |
| `height` | `?int` | Required | The image height in pixels. | getHeight(): ?int | setHeight(?int height): void |
| `width` | `?int` | Required | The image width in pixels. | getWidth(): ?int | setWidth(?int width): void |

## Example (as JSON)

```json
{
  "url": "https://i.scdn.co/image/ab67616d00001e02ff9ca10b55ce82ae553c8228\n",
  "height": 300,
  "width": 300
}
```

