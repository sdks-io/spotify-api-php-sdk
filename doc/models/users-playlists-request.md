
# Users Playlists Request

## Structure

`UsersPlaylistsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name for the new playlist, for example `"Your Coolest Playlist"`. This name does not need to be unique; a user may have several playlists with the same name. | getName(): string | setName(string name): void |
| `public` | `?bool` | Optional | Defaults to `true`. If `true` the playlist will be public, if `false` it will be private. To be able to create private playlists, the user must have granted the `playlist-modify-private` [scope](/documentation/web-api/concepts/scopes/#list-of-scopes) | getPublic(): ?bool | setPublic(?bool public): void |
| `collaborative` | `?bool` | Optional | Defaults to `false`. If `true` the playlist will be collaborative. _**Note**: to create a collaborative playlist you must also set `public` to `false`. To create collaborative playlists you must have granted `playlist-modify-private` and `playlist-modify-public` [scopes](/documentation/web-api/concepts/scopes/#list-of-scopes)._ | getCollaborative(): ?bool | setCollaborative(?bool collaborative): void |
| `description` | `?string` | Optional | value for playlist description as displayed in Spotify Clients and in the Web API. | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "name": "New Playlist",
  "description": "New playlist description",
  "public": false,
  "collaborative": false
}
```

