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
use SpotifyWebAPILib\Models\EpisodeObject;
use SpotifyWebAPILib\Models\ManyEpisodes;
use SpotifyWebAPILib\Models\MeEpisodesRequest;
use SpotifyWebAPILib\Models\MeEpisodesRequest1;
use SpotifyWebAPILib\Models\PagingSavedEpisodeObject;

class EpisodesController extends BaseController
{
    /**
     * Get Spotify catalog information for a single episode identified by its
     * unique Spotify ID.
     *
     *
     * @param string $id
     * @param string|null $market
     *
     * @return ApiResponse Response from the API call
     */
    public function getAnEpisode(string $id, ?string $market = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/episodes/{id}')
            ->auth('oauth_2_0')
            ->parameters(TemplateParam::init('id', $id), QueryParam::init('market', $market)->commaSeparated());

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
            ->type(EpisodeObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Spotify catalog information for several episodes based on their Spotify IDs.
     *
     *
     * @param string $ids
     * @param string|null $market
     *
     * @return ApiResponse Response from the API call
     */
    public function getMultipleEpisodes(string $ids, ?string $market = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/episodes')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('ids', $ids)->commaSeparated(),
                QueryParam::init('market', $market)->commaSeparated()
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
            ->type(ManyEpisodes::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get a list of the episodes saved in the current Spotify user's library.<br/>
     * This API endpoint is in __beta__ and could change without warning. Please share any feedback that
     * you have, or issues that you discover, in our [developer community forum](https://community.spotify.
     * com/t5/Spotify-for-Developers/bd-p/Spotify_Developer).
     *
     *
     * @param string|null $market
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return ApiResponse Response from the API call
     */
    public function getUsersSavedEpisodes(?string $market = null, ?int $limit = 20, ?int $offset = 0): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/episodes')
            ->auth('oauth_2_0')
            ->parameters(
                QueryParam::init('market', $market)->commaSeparated(),
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
            ->type(PagingSavedEpisodeObject::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Save one or more episodes to the current user's library.<br/>
     * This API endpoint is in __beta__ and could change without warning. Please share any feedback that
     * you have, or issues that you discover, in our [developer community forum](https://community.spotify.
     * com/t5/Spotify-for-Developers/bd-p/Spotify_Developer).
     *
     *
     * @param string $ids
     * @param MeEpisodesRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function saveEpisodesUser(string $ids, ?MeEpisodesRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/me/episodes')
            ->auth('oauth_2_0')
            ->parameters(
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
     * Remove one or more episodes from the current user's library.<br/>
     * This API endpoint is in __beta__ and could change without warning. Please share any feedback that
     * you have, or issues that you discover, in our [developer community forum](https://community.spotify.
     * com/t5/Spotify-for-Developers/bd-p/Spotify_Developer).
     *
     *
     * @param string $ids
     * @param MeEpisodesRequest1|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function removeEpisodesUser(string $ids, ?MeEpisodesRequest1 $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/me/episodes')
            ->auth('oauth_2_0')
            ->parameters(
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
     * Check if one or more episodes is already saved in the current Spotify user's 'Your Episodes' library.
     * <br/>
     * This API endpoint is in __beta__ and could change without warning. Please share any feedback that
     * you have, or issues that you discover, in our [developer community forum](https://community.spotify.
     * com/t5/Spotify-for-Developers/bd-p/Spotify_Developer)..
     *
     *
     * @param string $ids
     *
     * @return ApiResponse Response from the API call
     */
    public function checkUsersSavedEpisodes(string $ids): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/me/episodes/contains')
            ->auth('oauth_2_0')
            ->parameters(QueryParam::init('ids', $ids)->commaSeparated());

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
