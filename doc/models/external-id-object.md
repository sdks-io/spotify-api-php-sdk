
# External Id Object

## Structure

`ExternalIdObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isrc` | `?string` | Optional | [International Standard Recording Code](http://en.wikipedia.org/wiki/International_Standard_Recording_Code) | getIsrc(): ?string | setIsrc(?string isrc): void |
| `ean` | `?string` | Optional | [International Article Number](http://en.wikipedia.org/wiki/International_Article_Number_%28EAN%29) | getEan(): ?string | setEan(?string ean): void |
| `upc` | `?string` | Optional | [Universal Product Code](http://en.wikipedia.org/wiki/Universal_Product_Code) | getUpc(): ?string | setUpc(?string upc): void |

## Example (as JSON)

```json
{
  "isrc": "isrc2",
  "ean": "ean4",
  "upc": "upc8"
}
```

