
# Playlist Object

## Structure

`PlaylistObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `collaborative` | `?bool` | Optional | `true` if the owner allows other users to modify the playlist. | getCollaborative(): ?bool | setCollaborative(?bool collaborative): void |
| `description` | `?string` | Optional | The playlist description. _Only returned for modified, verified playlists, otherwise_ `null`. | getDescription(): ?string | setDescription(?string description): void |
| `externalUrls` | [`?ExternalUrlObject`](../../doc/models/external-url-object.md) | Optional | Known external URLs for this playlist. | getExternalUrls(): ?ExternalUrlObject | setExternalUrls(?ExternalUrlObject externalUrls): void |
| `followers` | [`?FollowersObject`](../../doc/models/followers-object.md) | Optional | Information about the followers of the playlist. | getFollowers(): ?FollowersObject | setFollowers(?FollowersObject followers): void |
| `href` | `?string` | Optional | A link to the Web API endpoint providing full details of the playlist. | getHref(): ?string | setHref(?string href): void |
| `id` | `?string` | Optional | The [Spotify ID](/documentation/web-api/concepts/spotify-uris-ids) for the playlist. | getId(): ?string | setId(?string id): void |
| `images` | [`?(ImageObject[])`](../../doc/models/image-object.md) | Optional | Images for the playlist. The array may be empty or contain up to three images. The images are returned by size in descending order. See [Working with Playlists](/documentation/web-api/concepts/playlists). _**Note**: If returned, the source URL for the image (`url`) is temporary and will expire in less than a day._ | getImages(): ?array | setImages(?array images): void |
| `name` | `?string` | Optional | The name of the playlist. | getName(): ?string | setName(?string name): void |
| `owner` | [`?PlaylistOwnerObject`](../../doc/models/playlist-owner-object.md) | Optional | The user who owns the playlist | getOwner(): ?PlaylistOwnerObject | setOwner(?PlaylistOwnerObject owner): void |
| `public` | `?bool` | Optional | The playlist's public/private status: `true` the playlist is public, `false` the playlist is private, `null` the playlist status is not relevant. For more about public/private status, see [Working with Playlists](/documentation/web-api/concepts/playlists) | getPublic(): ?bool | setPublic(?bool public): void |
| `snapshotId` | `?string` | Optional | The version identifier for the current playlist. Can be supplied in other requests to target a specific playlist version | getSnapshotId(): ?string | setSnapshotId(?string snapshotId): void |
| `tracks` | [`?PagingPlaylistTrackObject`](../../doc/models/paging-playlist-track-object.md) | Optional | The tracks of the playlist. | getTracks(): ?PagingPlaylistTrackObject | setTracks(?PagingPlaylistTrackObject tracks): void |
| `type` | `?string` | Optional | The object type: "playlist" | getType(): ?string | setType(?string type): void |
| `uri` | `?string` | Optional | The [Spotify URI](/documentation/web-api/concepts/spotify-uris-ids) for the playlist. | getUri(): ?string | setUri(?string uri): void |

## Example (as JSON)

```json
{
  "collaborative": false,
  "description": "description6",
  "external_urls": {
    "spotify": "spotify6"
  },
  "followers": {
    "href": "href0",
    "total": 82
  },
  "href": "href8"
}
```

