# Users

```php
$usersController = $client->getUsersController();
```

## Class Name

`UsersController`

## Methods

* [Get-Current-Users-Profile](../../doc/controllers/users.md#get-current-users-profile)
* [Get-Users-Profile](../../doc/controllers/users.md#get-users-profile)
* [Follow-Playlist](../../doc/controllers/users.md#follow-playlist)
* [Unfollow-Playlist](../../doc/controllers/users.md#unfollow-playlist)
* [Get-Followed](../../doc/controllers/users.md#get-followed)
* [Follow-Artists-Users](../../doc/controllers/users.md#follow-artists-users)
* [Unfollow-Artists-Users](../../doc/controllers/users.md#unfollow-artists-users)
* [Check-Current-User-Follows](../../doc/controllers/users.md#check-current-user-follows)
* [Check-If-User-Follows-Playlist](../../doc/controllers/users.md#check-if-user-follows-playlist)
* [Get-Users-Top-Artists](../../doc/controllers/users.md#get-users-top-artists)
* [Get-Users-Top-Tracks](../../doc/controllers/users.md#get-users-top-tracks)


# Get-Current-Users-Profile

Get detailed profile information about the current user (including the
current user's username).

```php
function getCurrentUsersProfile(): ApiResponse
```

## Requires scope

### oauth_2_0

`user-read-email`, `user-read-private`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PrivateUserObject`](../../doc/models/private-user-object.md).

## Example Usage

```php
$apiResponse = $usersController->getCurrentUsersProfile();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Users-Profile

Get public profile information about a Spotify user.

```php
function getUsersProfile(string $userId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PublicUserObject`](../../doc/models/public-user-object.md).

## Example Usage

```php
$userId = 'smedjan';

$apiResponse = $usersController->getUsersProfile($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Follow-Playlist

Add the current user as a follower of a playlist.

```php
function followPlaylist(string $playlistId, ?PlaylistsFollowersRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `body` | [`?PlaylistsFollowersRequest`](../../doc/models/playlists-followers-request.md) | Body, Optional | - |

## Requires scope

### oauth_2_0

`playlist-modify-private`, `playlist-modify-public`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$playlistId = '3cEYpjA9oz9GiPac4AsH4n';

$body = PlaylistsFollowersRequestBuilder::init()
    ->public(false)
    ->build();

$apiResponse = $usersController->followPlaylist(
    $playlistId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Unfollow-Playlist

Remove the current user as a follower of a playlist.

```php
function unfollowPlaylist(string $playlistId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |

## Requires scope

### oauth_2_0

`playlist-modify-private`, `playlist-modify-public`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$playlistId = '3cEYpjA9oz9GiPac4AsH4n';

$apiResponse = $usersController->unfollowPlaylist($playlistId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Followed

Get the current user's followed artists.

```php
function getFollowed(string $type, ?string $after = null, ?int $limit = 20): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`string(ItemType1Enum)`](../../doc/models/item-type-1-enum.md) | Query, Required | - |
| `after` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |

## Requires scope

### oauth_2_0

`user-follow-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CursorPagedArtists`](../../doc/models/cursor-paged-artists.md).

## Example Usage

```php
$type = ItemType1Enum::ARTIST;

$after = '0I2XqVXqHScXjHhk6AYYRe';

$limit = 10;

$apiResponse = $usersController->getFollowed(
    $type,
    $after,
    $limit
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Follow-Artists-Users

Add the current user as a follower of one or more artists or other Spotify users.

```php
function followArtistsUsers(string $type, string $ids, ?MeFollowingRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`string(ItemType2Enum)`](../../doc/models/item-type-2-enum.md) | Query, Required | - |
| `ids` | `string` | Query, Required | - |
| `body` | [`?MeFollowingRequest`](../../doc/models/me-following-request.md) | Body, Optional | - |

## Requires scope

### oauth_2_0

`user-follow-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$type = ItemType2Enum::ARTIST;

$ids = '2CIMQHirSU0MQqyYHq0eOx,57dN52uHvrHOxijzpIgu3E,1vCWHaC5f2uS3yhpwWbIA6';

$apiResponse = $usersController->followArtistsUsers(
    $type,
    $ids
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Unfollow-Artists-Users

Remove the current user as a follower of one or more artists or other Spotify users.

```php
function unfollowArtistsUsers(string $type, string $ids, ?MeFollowingRequest1 $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`string(ItemType3Enum)`](../../doc/models/item-type-3-enum.md) | Query, Required | - |
| `ids` | `string` | Query, Required | - |
| `body` | [`?MeFollowingRequest1`](../../doc/models/me-following-request-1.md) | Body, Optional | - |

## Requires scope

### oauth_2_0

`user-follow-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$type = ItemType3Enum::ARTIST;

$ids = '2CIMQHirSU0MQqyYHq0eOx,57dN52uHvrHOxijzpIgu3E,1vCWHaC5f2uS3yhpwWbIA6';

$apiResponse = $usersController->unfollowArtistsUsers(
    $type,
    $ids
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Check-Current-User-Follows

Check to see if the current user is following one or more artists or other Spotify users.

```php
function checkCurrentUserFollows(string $type, string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`string(ItemType3Enum)`](../../doc/models/item-type-3-enum.md) | Query, Required | - |
| `ids` | `string` | Query, Required | - |

## Requires scope

### oauth_2_0

`user-follow-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `bool[]`.

## Example Usage

```php
$type = ItemType3Enum::ARTIST;

$ids = '2CIMQHirSU0MQqyYHq0eOx,57dN52uHvrHOxijzpIgu3E,1vCWHaC5f2uS3yhpwWbIA6';

$apiResponse = $usersController->checkCurrentUserFollows(
    $type,
    $ids
);
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


# Check-If-User-Follows-Playlist

Check to see if one or more Spotify users are following a specified playlist.

```php
function checkIfUserFollowsPlaylist(string $playlistId, string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `ids` | `string` | Query, Required | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `bool[]`.

## Example Usage

```php
$playlistId = '3cEYpjA9oz9GiPac4AsH4n';

$ids = 'jmperezperez,thelinmichael,wizzler';

$apiResponse = $usersController->checkIfUserFollowsPlaylist(
    $playlistId,
    $ids
);
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


# Get-Users-Top-Artists

Get the current user's top artists based on calculated affinity.

```php
function getUsersTopArtists(?string $timeRange = 'medium_term', ?int $limit = 20, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `timeRange` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Requires scope

### oauth_2_0

`user-top-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagingArtistObject`](../../doc/models/paging-artist-object.md).

## Example Usage

```php
$timeRange = 'medium_term';

$limit = 10;

$offset = 5;

$apiResponse = $usersController->getUsersTopArtists(
    $timeRange,
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


# Get-Users-Top-Tracks

Get the current user's top tracks based on calculated affinity.

```php
function getUsersTopTracks(?string $timeRange = 'medium_term', ?int $limit = 20, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `timeRange` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Requires scope

### oauth_2_0

`user-top-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagingTrackObject`](../../doc/models/paging-track-object.md).

## Example Usage

```php
$timeRange = 'medium_term';

$limit = 10;

$offset = 5;

$apiResponse = $usersController->getUsersTopTracks(
    $timeRange,
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

