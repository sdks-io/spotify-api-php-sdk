# Audiobooks

```php
$audiobooksController = $client->getAudiobooksController();
```

## Class Name

`AudiobooksController`

## Methods

* [Get-an-Audiobook](../../doc/controllers/audiobooks.md#get-an-audiobook)
* [Get-Multiple-Audiobooks](../../doc/controllers/audiobooks.md#get-multiple-audiobooks)
* [Get-Audiobook-Chapters](../../doc/controllers/audiobooks.md#get-audiobook-chapters)
* [Get-Users-Saved-Audiobooks](../../doc/controllers/audiobooks.md#get-users-saved-audiobooks)
* [Save-Audiobooks-User](../../doc/controllers/audiobooks.md#save-audiobooks-user)
* [Remove-Audiobooks-User](../../doc/controllers/audiobooks.md#remove-audiobooks-user)
* [Check-Users-Saved-Audiobooks](../../doc/controllers/audiobooks.md#check-users-saved-audiobooks)


# Get-an-Audiobook

Get Spotify catalog information for a single audiobook. Audiobooks are only available within the US, UK, Canada, Ireland, New Zealand and Australia markets.

```php
function getAnAudiobook(string $id, ?string $market = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `market` | `?string` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AudiobookObject`](../../doc/models/audiobook-object.md).

## Example Usage

```php
$id = '7iHfbu1YPACw6oZPAFJtqe';

$market = 'ES';

$apiResponse = $audiobooksController->getAnAudiobook(
    $id,
    $market
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The request contains malformed data in path, query parameters, or body. | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 404 | The requested resource cannot be found. | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Multiple-Audiobooks

Get Spotify catalog information for several audiobooks identified by their Spotify IDs. Audiobooks are only available within the US, UK, Canada, Ireland, New Zealand and Australia markets.

```php
function getMultipleAudiobooks(string $ids, ?string $market = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |
| `market` | `?string` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ManyAudiobooks`](../../doc/models/many-audiobooks.md).

## Example Usage

```php
$ids = '18yVqkdbdRvS24c0Ilj2ci,1HGw3J3NxZO1TP1BTtVhpZ,7iHfbu1YPACw6oZPAFJtqe';

$market = 'ES';

$apiResponse = $audiobooksController->getMultipleAudiobooks(
    $ids,
    $market
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Audiobook-Chapters

Get Spotify catalog information about an audiobook's chapters. Audiobooks are only available within the US, UK, Canada, Ireland, New Zealand and Australia markets.

```php
function getAudiobookChapters(
    string $id,
    ?string $market = null,
    ?int $limit = 20,
    ?int $offset = 0
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `market` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagingSimplifiedChapterObject`](../../doc/models/paging-simplified-chapter-object.md).

## Example Usage

```php
$id = '7iHfbu1YPACw6oZPAFJtqe';

$market = 'ES';

$limit = 10;

$offset = 5;

$apiResponse = $audiobooksController->getAudiobookChapters(
    $id,
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


# Get-Users-Saved-Audiobooks

Get a list of the audiobooks saved in the current Spotify user's 'Your Music' library.

```php
function getUsersSavedAudiobooks(?int $limit = 20, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Requires scope

### oauth_2_0

`user-library-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagingSavedAudiobookObject`](../../doc/models/paging-saved-audiobook-object.md).

## Example Usage

```php
$limit = 10;

$offset = 5;

$apiResponse = $audiobooksController->getUsersSavedAudiobooks(
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


# Save-Audiobooks-User

Save one or more audiobooks to the current Spotify user's library.

```php
function saveAudiobooksUser(string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |

## Requires scope

### oauth_2_0

`user-library-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$ids = '18yVqkdbdRvS24c0Ilj2ci,1HGw3J3NxZO1TP1BTtVhpZ,7iHfbu1YPACw6oZPAFJtqe';

$apiResponse = $audiobooksController->saveAudiobooksUser($ids);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Remove-Audiobooks-User

Remove one or more audiobooks from the Spotify user's library.

```php
function removeAudiobooksUser(string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |

## Requires scope

### oauth_2_0

`user-library-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$ids = '18yVqkdbdRvS24c0Ilj2ci,1HGw3J3NxZO1TP1BTtVhpZ,7iHfbu1YPACw6oZPAFJtqe';

$apiResponse = $audiobooksController->removeAudiobooksUser($ids);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Check-Users-Saved-Audiobooks

Check if one or more audiobooks are already saved in the current Spotify user's library.

```php
function checkUsersSavedAudiobooks(string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |

## Requires scope

### oauth_2_0

`user-library-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `bool[]`.

## Example Usage

```php
$ids = '18yVqkdbdRvS24c0Ilj2ci,1HGw3J3NxZO1TP1BTtVhpZ,7iHfbu1YPACw6oZPAFJtqe';

$apiResponse = $audiobooksController->checkUsersSavedAudiobooks($ids);
```

## Example Response

```
[
  false,
  true
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |

