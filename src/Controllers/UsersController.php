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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use SpotifyWebAPILib\Exceptions\ForbiddenException;
use SpotifyWebAPILib\Exceptions\TooManyRequestsException;
use SpotifyWebAPILib\Exceptions\UnauthorizedException;
use SpotifyWebAPILib\Http\ApiResponse;
use SpotifyWebAPILib\Models\CursorPagedArtists;
use SpotifyWebAPILib\Models\ItemType1Enum;
use SpotifyWebAPILib\Models\ItemType2Enum;
use SpotifyWebAPILib\Models\ItemType3Enum;
use SpotifyWebAPILib\Models\MeFollowingRequest;
use SpotifyWebAPILib\Models\MeFollowingRequest1;
use SpotifyWebAPILib\Models\PagingArtistObject;
use SpotifyWebAPILib\Models\PagingTrackObject;
use SpotifyWebAPILib\Models\PlaylistsFollowersRequest;
use SpotifyWebAPILib\Models\PrivateUserObject;
use SpotifyWebAPILib\Models\PublicUserObject;

class UsersController extends BaseController
{
    /**
     * Get detailed profile information about the current user (including the
     * current user's username).
     *
     *
     * @return ApiResponse Response from the API call
     */
    public function getCurrentUsersProfile(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me')->auth('oauth_2_0');

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
            ->type(PrivateUserObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get public profile information about a Spotify user.
     *
     *
     * @param string $userId
     *
     * @return ApiResponse Response from the API call
     */
    public function getUsersProfile(string $userId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/users/{user_id}')
            ->auth('oauth_2_0')
            ->parameters(TemplateParam::init('user_id', $userId));

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
            ->type(PublicUserObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Add the current user as a follower of a playlist.
     *
     *
     * @param string $playlistId
     * @param PlaylistsFollowersRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function followPlaylist(string $playlistId, ?PlaylistsFollowersRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/playlists/{playlist_id}/followers')
            ->auth('oauth_2_0')
            ->parameters(
                TemplateParam::init('playlist_id', $playlistId),
                HeaderParam::init('Content-Type', 'application/json'),
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
     * Remove the current user as a follower of a playlist.
     *
     *
     * @param string $playlistId
     *
     * @return ApiResponse Response from the API call
     */
    public function unfollowPlaylist(string $playlistId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/playlists/{playlist_id}/followers')
            ->auth('oauth_2_0')
            ->parameters(TemplateParam::init('playlist_id', $playlistId));

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
     * Get the current user's followed artists.
     *
     *
     * @param string $type
     * @param string|null $after
     * @param int|null $limit
     *
     * @return ApiResponse Response from the API call
     */
    public function getFollowed(string $type, ?string $after = null, ?int $limit = 20): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/following')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('type', $type)->commaSeparated()->serializeBy([ItemType1Enum::class, 'checkValue']),
                QueryParam::init('after', $after)->commaSeparated(),
                QueryParam::init('limit', $limit)->commaSeparated()
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
            ->type(CursorPagedArtists::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Add the current user as a follower of one or more artists or other Spotify users.
     *
     *
     * @param string $type
     * @param string $ids
     * @param MeFollowingRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function followArtistsUsers(string $type, string $ids, ?MeFollowingRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/following')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('type', $type)->commaSeparated()->serializeBy([ItemType2Enum::class, 'checkValue']),
                QueryParam::init('ids', $ids)->commaSeparated(),
                HeaderParam::init('Content-Type', 'application/json'),
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
     * Remove the current user as a follower of one or more artists or other Spotify users.
     *
     *
     * @param string $type
     * @param string $ids
     * @param MeFollowingRequest1|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function unfollowArtistsUsers(string $type, string $ids, ?MeFollowingRequest1 $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/me/following')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('type', $type)->commaSeparated()->serializeBy([ItemType3Enum::class, 'checkValue']),
                QueryParam::init('ids', $ids)->commaSeparated(),
                HeaderParam::init('Content-Type', 'application/json'),
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
     * Check to see if the current user is following one or more artists or other Spotify users.
     *
     *
     * @param string $type
     * @param string $ids
     *
     * @return ApiResponse Response from the API call
     */
    public function checkCurrentUserFollows(string $type, string $ids): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/following/contains')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('type', $type)->commaSeparated()->serializeBy([ItemType3Enum::class, 'checkValue']),
                QueryParam::init('ids', $ids)->commaSeparated()
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
     * Check to see if one or more Spotify users are following a specified playlist.
     *
     *
     * @param string $playlistId
     * @param string $ids
     *
     * @return ApiResponse Response from the API call
     */
    public function checkIfUserFollowsPlaylist(string $playlistId, string $ids): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/playlists/{playlist_id}/followers/contains')
            ->auth('oauth_2_0')
            ->parameters(
                TemplateParam::init('playlist_id', $playlistId),
                QueryParam::init('ids', $ids)->commaSeparated()
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
     * Get the current user's top artists based on calculated affinity.
     *
     *
     * @param string|null $timeRange
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return ApiResponse Response from the API call
     */
    public function getUsersTopArtists(
        ?string $timeRange = 'medium_term',
        ?int $limit = 20,
        ?int $offset = 0
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/top/artists')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('time_range', $timeRange)->commaSeparated(),
                QueryParam::init('limit', $limit)->commaSeparated(),
                QueryParam::init('offset', $offset)->commaSeparated()
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
            ->type(PagingArtistObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get the current user's top tracks based on calculated affinity.
     *
     *
     * @param string|null $timeRange
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return ApiResponse Response from the API call
     */
    public function getUsersTopTracks(
        ?string $timeRange = 'medium_term',
        ?int $limit = 20,
        ?int $offset = 0
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/top/tracks')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('time_range', $timeRange)->commaSeparated(),
                QueryParam::init('limit', $limit)->commaSeparated(),
                QueryParam::init('offset', $offset)->commaSeparated()
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
            ->type(PagingTrackObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
