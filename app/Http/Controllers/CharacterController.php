<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public static function getCharacters(Request $request)
    {
        $page = $request->page;

        if ($page) {
            $characters = HTTP::get("https://rickandmortyapi.com/api/character?page=$page")->json();
        } else {
            $characters = HTTP::get("https://rickandmortyapi.com/api/character")->json();
        }
        return view(
            'front',
            ["characters" => $characters['results']]
        );
    }

    public static function showSingleCharacter(Request $request)
    {

        $id = $request->id;

        $character = HTTP::get("https://rickandmortyapi.com/api/character/$id")->json();
        $episodes = [];
        foreach($character['episode'] as $episode) {
            $single_episode = self::getEpisodeNames($episode);
            array_push($episodes, $single_episode['name']);
        }

        return view (
            "character",
            ["character" => $character],
            ["episodes" => $episodes]
        );
    }

    public static function getEpisodeNames($episode) {

        $episode = HTTP::get($episode)->json();
        return $episode;
    }
}
