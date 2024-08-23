# Tracks

```php
$tracksController = $client->getTracksController();
```

## Class Name

`TracksController`

## Methods

* [Get-Track](../../doc/controllers/tracks.md#get-track)
* [Get-Several-Tracks](../../doc/controllers/tracks.md#get-several-tracks)
* [Get-Users-Saved-Tracks](../../doc/controllers/tracks.md#get-users-saved-tracks)
* [Save-Tracks-User](../../doc/controllers/tracks.md#save-tracks-user)
* [Remove-Tracks-User](../../doc/controllers/tracks.md#remove-tracks-user)
* [Check-Users-Saved-Tracks](../../doc/controllers/tracks.md#check-users-saved-tracks)
* [Get-Several-Audio-Features](../../doc/controllers/tracks.md#get-several-audio-features)
* [Get-Audio-Features](../../doc/controllers/tracks.md#get-audio-features)
* [Get-Audio-Analysis](../../doc/controllers/tracks.md#get-audio-analysis)
* [Get-Recommendations](../../doc/controllers/tracks.md#get-recommendations)


# Get-Track

Get Spotify catalog information for a single track identified by its
unique Spotify ID.

```php
function getTrack(string $id, ?string $market = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `market` | `?string` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TrackObject`](../../doc/models/track-object.md).

## Example Usage

```php
$id = '11dFghVXANMlKmJXsNCbNl';

$market = 'ES';

$apiResponse = $tracksController->getTrack(
    $id,
    $market
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Several-Tracks

Get Spotify catalog information for multiple tracks based on their Spotify IDs.

```php
function getSeveralTracks(string $ids, ?string $market = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |
| `market` | `?string` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ManyTracks`](../../doc/models/many-tracks.md).

## Example Usage

```php
$ids = '7ouMYWpwJ422jRcDASZB7P,4VqPOruhp5EdPBeR92t6lQ,2takcwOaAZWiXQijPHIx7B';

$market = 'ES';

$apiResponse = $tracksController->getSeveralTracks(
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


# Get-Users-Saved-Tracks

Get a list of the songs saved in the current Spotify user's 'Your Music' library.

```php
function getUsersSavedTracks(?string $market = null, ?int $limit = 20, ?int $offset = 0): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `market` | `?string` | Query, Optional | - |
| `limit` | `?int` | Query, Optional | - |
| `offset` | `?int` | Query, Optional | - |

## Requires scope

### oauth_2_0

`user-library-read`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PagingSavedTrackObject`](../../doc/models/paging-saved-track-object.md).

## Example Usage

```php
$market = 'ES';

$limit = 10;

$offset = 5;

$apiResponse = $tracksController->getUsersSavedTracks(
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


# Save-Tracks-User

Save one or more tracks to the current user's 'Your Music' library.

```php
function saveTracksUser(string $ids, ?MeTracksRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |
| `body` | [`?MeTracksRequest`](../../doc/models/me-tracks-request.md) | Body, Optional | - |

## Requires scope

### oauth_2_0

`user-library-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$ids = '7ouMYWpwJ422jRcDASZB7P,4VqPOruhp5EdPBeR92t6lQ,2takcwOaAZWiXQijPHIx7B';

$apiResponse = $tracksController->saveTracksUser($ids);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Remove-Tracks-User

Remove one or more tracks from the current user's 'Your Music' library.

```php
function removeTracksUser(string $ids, ?MeTracksRequest1 $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |
| `body` | [`?MeTracksRequest1`](../../doc/models/me-tracks-request-1.md) | Body, Optional | - |

## Requires scope

### oauth_2_0

`user-library-modify`

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance.

## Example Usage

```php
$ids = '7ouMYWpwJ422jRcDASZB7P,4VqPOruhp5EdPBeR92t6lQ,2takcwOaAZWiXQijPHIx7B';

$apiResponse = $tracksController->removeTracksUser($ids);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Check-Users-Saved-Tracks

Check if one or more tracks is already saved in the current Spotify user's 'Your Music' library.

```php
function checkUsersSavedTracks(string $ids): ApiResponse
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
$ids = '7ouMYWpwJ422jRcDASZB7P,4VqPOruhp5EdPBeR92t6lQ,2takcwOaAZWiXQijPHIx7B';

$apiResponse = $tracksController->checkUsersSavedTracks($ids);
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


# Get-Several-Audio-Features

Get audio features for multiple tracks based on their Spotify IDs.

```php
function getSeveralAudioFeatures(string $ids): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ids` | `string` | Query, Required | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ManyAudioFeatures`](../../doc/models/many-audio-features.md).

## Example Usage

```php
$ids = '7ouMYWpwJ422jRcDASZB7P,4VqPOruhp5EdPBeR92t6lQ,2takcwOaAZWiXQijPHIx7B';

$apiResponse = $tracksController->getSeveralAudioFeatures($ids);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Audio-Features

Get audio feature information for a single track identified by its unique
Spotify ID.

```php
function getAudioFeatures(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AudioFeaturesObject`](../../doc/models/audio-features-object.md).

## Example Usage

```php
$id = '11dFghVXANMlKmJXsNCbNl';

$apiResponse = $tracksController->getAudioFeatures($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Audio-Analysis

Get a low-level audio analysis for a track in the Spotify catalog. The audio analysis describes the track’s structure and musical content, including rhythm, pitch, and timbre.

```php
function getAudioAnalysis(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AudioAnalysisObject`](../../doc/models/audio-analysis-object.md).

## Example Usage

```php
$id = '11dFghVXANMlKmJXsNCbNl';

$apiResponse = $tracksController->getAudioAnalysis($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |


# Get-Recommendations

Recommendations are generated based on the available information for a given seed entity and matched against similar artists and tracks. If there is sufficient information about the provided seeds, a list of tracks will be returned together with pool size details.

For artists and tracks that are very new or obscure there might not be enough data to generate a list of tracks.

```php
function getRecommendations(
    ?int $limit = 20,
    ?string $market = null,
    ?string $seedArtists = null,
    ?string $seedGenres = null,
    ?string $seedTracks = null,
    ?float $minAcousticness = null,
    ?float $maxAcousticness = null,
    ?float $targetAcousticness = null,
    ?float $minDanceability = null,
    ?float $maxDanceability = null,
    ?float $targetDanceability = null,
    ?int $minDurationMs = null,
    ?int $maxDurationMs = null,
    ?int $targetDurationMs = null,
    ?float $minEnergy = null,
    ?float $maxEnergy = null,
    ?float $targetEnergy = null,
    ?float $minInstrumentalness = null,
    ?float $maxInstrumentalness = null,
    ?float $targetInstrumentalness = null,
    ?int $minKey = null,
    ?int $maxKey = null,
    ?int $targetKey = null,
    ?float $minLiveness = null,
    ?float $maxLiveness = null,
    ?float $targetLiveness = null,
    ?float $minLoudness = null,
    ?float $maxLoudness = null,
    ?float $targetLoudness = null,
    ?int $minMode = null,
    ?int $maxMode = null,
    ?int $targetMode = null,
    ?int $minPopularity = null,
    ?int $maxPopularity = null,
    ?int $targetPopularity = null,
    ?float $minSpeechiness = null,
    ?float $maxSpeechiness = null,
    ?float $targetSpeechiness = null,
    ?float $minTempo = null,
    ?float $maxTempo = null,
    ?float $targetTempo = null,
    ?int $minTimeSignature = null,
    ?int $maxTimeSignature = null,
    ?int $targetTimeSignature = null,
    ?float $minValence = null,
    ?float $maxValence = null,
    ?float $targetValence = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | - |
| `market` | `?string` | Query, Optional | - |
| `seedArtists` | `?string` | Query, Optional | - |
| `seedGenres` | `?string` | Query, Optional | - |
| `seedTracks` | `?string` | Query, Optional | - |
| `minAcousticness` | `?float` | Query, Optional | - |
| `maxAcousticness` | `?float` | Query, Optional | - |
| `targetAcousticness` | `?float` | Query, Optional | - |
| `minDanceability` | `?float` | Query, Optional | - |
| `maxDanceability` | `?float` | Query, Optional | - |
| `targetDanceability` | `?float` | Query, Optional | - |
| `minDurationMs` | `?int` | Query, Optional | - |
| `maxDurationMs` | `?int` | Query, Optional | - |
| `targetDurationMs` | `?int` | Query, Optional | - |
| `minEnergy` | `?float` | Query, Optional | - |
| `maxEnergy` | `?float` | Query, Optional | - |
| `targetEnergy` | `?float` | Query, Optional | - |
| `minInstrumentalness` | `?float` | Query, Optional | - |
| `maxInstrumentalness` | `?float` | Query, Optional | - |
| `targetInstrumentalness` | `?float` | Query, Optional | - |
| `minKey` | `?int` | Query, Optional | - |
| `maxKey` | `?int` | Query, Optional | - |
| `targetKey` | `?int` | Query, Optional | - |
| `minLiveness` | `?float` | Query, Optional | - |
| `maxLiveness` | `?float` | Query, Optional | - |
| `targetLiveness` | `?float` | Query, Optional | - |
| `minLoudness` | `?float` | Query, Optional | - |
| `maxLoudness` | `?float` | Query, Optional | - |
| `targetLoudness` | `?float` | Query, Optional | - |
| `minMode` | `?int` | Query, Optional | - |
| `maxMode` | `?int` | Query, Optional | - |
| `targetMode` | `?int` | Query, Optional | - |
| `minPopularity` | `?int` | Query, Optional | - |
| `maxPopularity` | `?int` | Query, Optional | - |
| `targetPopularity` | `?int` | Query, Optional | - |
| `minSpeechiness` | `?float` | Query, Optional | - |
| `maxSpeechiness` | `?float` | Query, Optional | - |
| `targetSpeechiness` | `?float` | Query, Optional | - |
| `minTempo` | `?float` | Query, Optional | - |
| `maxTempo` | `?float` | Query, Optional | - |
| `targetTempo` | `?float` | Query, Optional | - |
| `minTimeSignature` | `?int` | Query, Optional | - |
| `maxTimeSignature` | `?int` | Query, Optional | - |
| `targetTimeSignature` | `?int` | Query, Optional | - |
| `minValence` | `?float` | Query, Optional | - |
| `maxValence` | `?float` | Query, Optional | - |
| `targetValence` | `?float` | Query, Optional | - |

## Response Type

This method returns a `SpotifyWebAPILib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RecommendationsObject`](../../doc/models/recommendations-object.md).

## Example Usage

```php
$limit = 10;

$market = 'ES';

$seedArtists = '4NHQUGzhtTLFvgF5SZesLK';

$seedGenres = 'classical,country';

$seedTracks = '0c6xIDDpzE81m2q797ordA';

$apiResponse = $tracksController->getRecommendations(
    $limit,
    $market,
    $seedArtists,
    $seedGenres,
    $seedTracks
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Bad or expired token. This can happen if the user revoked a token or<br>the access token has expired. You should re-authenticate the user. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 403 | Bad OAuth request (wrong consumer key, bad nonce, expired<br>timestamp...). Unfortunately, re-authenticating the user won't help here. | [`ForbiddenException`](../../doc/models/forbidden-exception.md) |
| 429 | The app has exceeded its rate limits. | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |

