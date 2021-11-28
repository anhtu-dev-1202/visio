<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class VideoController extends Controller
{
    public function video(Request $request) {
        $playlists = Http::get("https://www.googleapis.com/youtube/v3/playlists", [
            'key' => env('KEY_YOUTOBE'),
            'part' => 'snippet,id',
            'channelId' => env('CHANNEL_ID'),
            'order' => 'date',
            'maxResults' => 50,
        ])->json();

        $playlists = $playlists['items'];

        $item = Http::get("https://www.googleapis.com/youtube/v3/playlistItems", [
            'key' => env('KEY_YOUTOBE'),
            'part' => 'snippet,id',
            'playlistId' => isset($request->playlist) ? $request->playlist : $playlists[0]['id'],
            'maxResults' => 50,
        ])->json();

        $data = $item['items'];

        foreach ($data as &$el) {
            $video = Http::get("https://www.googleapis.com/youtube/v3/videos", [
                'key' => env('KEY_YOUTOBE'),
                'part' => 'statistics',
                'id' => $el['snippet']['resourceId']['videoId'],
            ])->json();

            if (isset($video)) $el['snippet']['viewCount'] = $video['items'][0]['statistics']['viewCount'];
        }

        $title = count($playlists) > 0 ? $playlists[0]['snippet']['title'] : null;
        $id = isset($request->playlist) ? $request->playlist : null;


        return view('view.video', compact('playlists', 'id','title', 'data'));
    }
}
