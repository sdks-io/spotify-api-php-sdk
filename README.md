
# Getting Started with Spotify Web API

## Introduction

You can use Spotify's Web API to discover music and podcasts, manage your Spotify library, control audio playback, and much more. Browse our available Web API endpoints using the sidebar at left, or via the navigation bar on top of this page on smaller screens.

In order to make successful Web API requests your app will need a valid access token. One can be obtained through <a href="https://developer.spotify.com/documentation/general/guides/authorization-guide/">OAuth 2.0</a>.

The base URI for all Web API requests is `https://api.spotify.com/v1`.

Need help? See our <a href="https://developer.spotify.com/documentation/web-api/guides/">Web API guides</a> for more information, or visit the <a href="https://community.spotify.com/t5/Spotify-for-Developers/bd-p/Spotify_Developer">Spotify for Developers community forum</a> to ask questions and connect with other developers.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "sdksio/spotify-api-sdk:1.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "sdksio/spotify-api-sdk": "1.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/sdksio/spotify-api-sdk#1.0.0

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/client.md)

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
| `authorizationCodeAuth` | [`AuthorizationCodeAuth`](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/auth/oauth-2-authorization-code-grant.md) | The Credentials Setter for OAuth 2 Authorization Code Grant |

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

## Authorization

This API uses the following authentication schemes.

* [`oauth_2_0 (OAuth 2 Authorization Code Grant)`](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/auth/oauth-2-authorization-code-grant.md)

## List of APIs

* [Albums](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/albums.md)
* [Artists](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/artists.md)
* [Audiobooks](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/audiobooks.md)
* [Categories](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/categories.md)
* [Chapters](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/chapters.md)
* [Episodes](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/episodes.md)
* [Genres](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/genres.md)
* [Markets](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/markets.md)
* [Player](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/player.md)
* [Playlists](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/playlists.md)
* [Search](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/search.md)
* [Shows](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/shows.md)
* [Tracks](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/tracks.md)
* [Users](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/controllers/users.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/spotify-api-php-sdk/tree/1.0.0/doc/http-response.md)

