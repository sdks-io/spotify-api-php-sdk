
# Playlists Request

## Structure

`PlaylistsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The new name for the playlist, for example `"My New Playlist Title"` | getName(): ?string | setName(?string name): void |
| `public` | `?bool` | Optional | If `true` the playlist will be public, if `false` it will be private. | getPublic(): ?bool | setPublic(?bool public): void |
| `collaborative` | `?bool` | Optional | If `true`, the playlist will become collaborative and other users will be able to modify the playlist in their Spotify client. <br/><br>_**Note**: You can only set `collaborative` to `true` on non-public playlists._ | getCollaborative(): ?bool | setCollaborative(?bool collaborative): void |
| `description` | `?string` | Optional | Value for playlist description as displayed in Spotify Clients and in the Web API. | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "name": "Updated Playlist Name",
  "description": "Updated playlist description",
  "public": false,
  "collaborative": false
}
```

