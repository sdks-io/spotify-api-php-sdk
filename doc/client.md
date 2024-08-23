
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `authorizationCodeAuth` | [`AuthorizationCodeAuth`](auth/oauth-2-authorization-code-grant.md) | The Credentials Setter for OAuth 2 Authorization Code Grant |

The API client can be initialized as follows:

```php
$client = SpotifyWebAPIClientBuilder::init()
    ->authorizationCodeAuthCredentials(
        AuthorizationCodeAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret',
            'OAuthRedirectUri'
        )
            ->oAuthScopes(
                [
                    OAuthScopeEnum::APP_REMOTE_CONTROL,
                    OAuthScopeEnum::PLAYLIST_READ_PRIVATE
                ]
            )
    )
    ->environment('production')
    ->build();
```

API calls return an `ApiResponse` object that includes the following fields:

| Field | Description |
|  --- | --- |
| `getStatusCode` | Status code of the HTTP response |
| `getHeaders` | Headers of the HTTP response as a Hash |
| `getResult` | The deserialized body of the HTTP response as a String |

## Spotify Web API Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getAlbumsController() | Gets AlbumsController |
| getArtistsController() | Gets ArtistsController |
| getAudiobooksController() | Gets AudiobooksController |
| getCategoriesController() | Gets CategoriesController |
| getChaptersController() | Gets ChaptersController |
| getEpisodesController() | Gets EpisodesController |
| getGenresController() | Gets GenresController |
| getMarketsController() | Gets MarketsController |
| getPlayerController() | Gets PlayerController |
| getPlaylistsController() | Gets PlaylistsController |
| getSearchController() | Gets SearchController |
| getShowsController() | Gets ShowsController |
| getTracksController() | Gets TracksController |
| getUsersController() | Gets UsersController |
| getOAuthAuthorizationController() | Gets OAuthAuthorizationController |

