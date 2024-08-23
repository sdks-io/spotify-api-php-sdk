# Categories

```php
$categoriesController = $client->getCategoriesController();
```

## Class Name

`CategoriesController`

## Methods

* [Get-Categories](../../doc/controllers/categories.md#get-categories)
* [Get-a-Category](../../doc/controllers/categories.md#get-a-category)


# Get-Categories

Get a list of categories used to tag items in Spotify (on, for example, the Spotify player’s “Browse” tab).

```php
function getCategories(?string $locale = null, ?int $limit = 20, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locale` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagedCategories`](../../doc/models/paged-categories.md).

## Example Usage

```php
$locale = 'sv_SE';

$limit = 10;

$offset = 5;

$apiResponse = $categoriesController->getCategories(
    $locale,
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


# Get-a-Category

Get a single category used to tag items in Spotify (on, for example, the Spotify player’s “Browse” tab).

```php
function getACategory(string $categoryId, ?string $locale = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `categoryId` | `string` | Template, Required | - |
| `locale` | `?string` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CategoryObject`](../../doc/models/category-object.md).

## Example Usage

```php
$categoryId = 'dinner';

$locale = 'sv_SE';

$apiResponse = $categoriesController->getACategory(
    $categoryId,
    $locale
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |

