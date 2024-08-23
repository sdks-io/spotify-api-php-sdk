# Search

```php
$searchController = $client->getSearchController();
```

## Class Name

`SearchController`


# Search

Get Spotify catalog information about albums, artists, playlists, tracks, shows, episodes or audiobooks
that match a keyword string. Audiobooks are only available within the US, UK, Canada, Ireland, New Zealand and Australia markets.

```php
function search(
    string $q,
    array $type,
    ?string $market = null,
    ?int $limit = 20,
    ?int $offset = 0,
    ?string $includeExternal = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `q` | `string` | Query, Required | - |
| `type` | [`string(ItemTypeEnum)[]`](../../doc/models/item-type-enum.md) | Query, Required | - |
| `market` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |
| `includeExternal` | [`?string(IncludeExternalEnum)`](../../doc/models/include-external-enum.md) | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SearchItems`](../../doc/models/search-items.md).

## Example Usage

```php
$q = 'remaster%20track:Doxy%20artist:Miles%20Davis';

$type = [
    ItemTypeEnum::AUDIOBOOK,
    ItemTypeEnum::ALBUM,
    ItemTypeEnum::ARTIST
];

$market = 'ES';

$limit = 10;

$offset = 5;

$apiResponse = $searchController->search(
    $q,
    $type,
    $market,
    $limit,
    $offset
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |

