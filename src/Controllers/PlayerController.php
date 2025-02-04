<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use SpotifyWebAPILib\Exceptions\ForbiddenException;
use SpotifyWebAPILib\Exceptions\TooManyRequestsException;
use SpotifyWebAPILib\Exceptions\UnauthorizedException;
use SpotifyWebAPILib\Http\ApiResponse;
use SpotifyWebAPILib\Models\CurrentlyPlayingContextObject;
use SpotifyWebAPILib\Models\CurrentlyPlayingObject;
use SpotifyWebAPILib\Models\CursorPagingPlayHistoryObject;
use SpotifyWebAPILib\Models\ManyDevices;
use SpotifyWebAPILib\Models\MePlayerPlayRequest;
use SpotifyWebAPILib\Models\MePlayerRequest;
use SpotifyWebAPILib\Models\QueueObject;

class PlayerController extends BaseController
{
    /**
     * Get information about the user’s current playback state, including track or episode, progress, and
     * active device.
     *
     *
     * @param string|null $market
     * @param string|null $additionalTypes
     *
     * @return ApiResponse Response from the API call
     */
    public function getInformationAboutTheUsersCurrentPlayback(
        ?string $market = null,
        ?string $additionalTypes = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/player')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('market', $market)->commaSeparated(),
                QueryParam::init('additional_types', $additionalTypes)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->type(CurrentlyPlayingContextObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Transfer playback to a new device and optionally begin playback. This API only works for users who
     * have Spotify Premium. The order of execution is not guaranteed when you use this API with other
     * Player API endpoints.
     *
     *
     * @param MePlayerRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function transferAUsersPlayback(?MePlayerRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player')
            ->auth('oauth_2_0')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get information about a user’s available Spotify Connect devices. Some device models are not
     * supported and will not be listed in the API response.
     *
     *
     * @return ApiResponse Response from the API call
     */
    public function getAUsersAvailableDevices(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/player/devices')->auth('oauth_2_0');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->type(ManyDevices::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get the object currently being played on the user's Spotify account.
     *
     *
     * @param string|null $market
     * @param string|null $additionalTypes
     *
     * @return ApiResponse Response from the API call
     */
    public function getTheUsersCurrentlyPlayingTrack(
        ?string $market = null,
        ?string $additionalTypes = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/player/currently-playing')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('market', $market)->commaSeparated(),
                QueryParam::init('additional_types', $additionalTypes)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->type(CurrentlyPlayingObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Start a new context or resume current playback on the user's active device. This API only works for
     * users who have Spotify Premium. The order of execution is not guaranteed when you use this API with
     * other Player API endpoints.
     *
     *
     * @param string|null $deviceId
     * @param MePlayerPlayRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function startAUsersPlayback(?string $deviceId = null, ?MePlayerPlayRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/play')
            ->auth('oauth_2_0')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('device_id', $deviceId)->commaSeparated(),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Pause playback on the user's account. This API only works for users who have Spotify Premium. The
     * order of execution is not guaranteed when you use this API with other Player API endpoints.
     *
     *
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function pauseAUsersPlayback(?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/pause')
            ->auth('oauth_2_0')
            ->parameters(QueryParam::init('device_id', $deviceId)->commaSeparated());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Skips to next track in the user’s queue. This API only works for users who have Spotify Premium. The
     * order of execution is not guaranteed when you use this API with other Player API endpoints.
     *
     *
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function skipUsersPlaybackToNextTrack(?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/me/player/next')
            ->auth('oauth_2_0')
            ->parameters(QueryParam::init('device_id', $deviceId)->commaSeparated());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Skips to previous track in the user’s queue. This API only works for users who have Spotify Premium.
     * The order of execution is not guaranteed when you use this API with other Player API endpoints.
     *
     *
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function skipUsersPlaybackToPreviousTrack(?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/me/player/previous')
            ->auth('oauth_2_0')
            ->parameters(QueryParam::init('device_id', $deviceId)->commaSeparated());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Seeks to the given position in the user’s currently playing track. This API only works for users who
     * have Spotify Premium. The order of execution is not guaranteed when you use this API with other
     * Player API endpoints.
     *
     *
     * @param int $positionMs
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function seekToPositionInCurrentlyPlayingTrack(int $positionMs, ?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/seek')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('position_ms', $positionMs)->commaSeparated(),
                QueryParam::init('device_id', $deviceId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Set the repeat mode for the user's playback. This API only works for users who have Spotify Premium.
     * The order of execution is not guaranteed when you use this API with other Player API endpoints.
     *
     *
     * @param string $state
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function setRepeatModeOnUsersPlayback(string $state, ?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/repeat')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('state', $state)->commaSeparated(),
                QueryParam::init('device_id', $deviceId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Set the volume for the user’s current playback device. This API only works for users who have
     * Spotify Premium. The order of execution is not guaranteed when you use this API with other Player
     * API endpoints.
     *
     *
     * @param int $volumePercent
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function setVolumeForUsersPlayback(int $volumePercent, ?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/volume')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('volume_percent', $volumePercent)->commaSeparated(),
                QueryParam::init('device_id', $deviceId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Toggle shuffle on or off for user’s playback. This API only works for users who have Spotify Premium.
     * The order of execution is not guaranteed when you use this API with other Player API endpoints.
     *
     *
     * @param bool $state
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function toggleShuffleForUsersPlayback(bool $state, ?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/player/shuffle')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('state', $state)->commaSeparated(),
                QueryParam::init('device_id', $deviceId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get tracks from the current user's recently played tracks.
     * _**Note**: Currently doesn't support podcast episodes._
     *
     *
     * @param int|null $limit
     * @param int|null $after
     * @param int|null $before
     *
     * @return ApiResponse Response from the API call
     */
    public function getRecentlyPlayed(?int $limit = 20, ?int $after = null, ?int $before = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/player/recently-played')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('limit', $limit)->commaSeparated(),
                QueryParam::init('after', $after)->commaSeparated(),
                QueryParam::init('before', $before)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->type(CursorPagingPlayHistoryObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get the list of objects that make up the user's queue.
     *
     *
     * @return ApiResponse Response from the API call
     */
    public function getQueue(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/player/queue')->auth('oauth_2_0');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->type(QueueObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Add an item to the end of the user's current playback queue. This API only works for users who have
     * Spotify Premium. The order of execution is not guaranteed when you use this API with other Player
     * API endpoints.
     *
     *
     * @param string $uri
     * @param string|null $deviceId
     *
     * @return ApiResponse Response from the API call
     */
    public function addToQueue(string $uri, ?string $deviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/me/player/queue')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('uri', $uri)->commaSeparated(),
                QueryParam::init('device_id', $deviceId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    "Bad or expired token. This can happen if the user revoked a token or\nthe " .
                    "access token has expired. You should re-authenticate the user.\n",
                    UnauthorizedException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    "Bad OAuth request (wrong consumer key, bad nonce, expired\ntimestamp...). " .
                    "Unfortunately, re-authenticating the user won't help here.\n",
                    ForbiddenException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::init("The app has exceeded its rate limits.\n", TooManyRequestsException::class)
            )
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
