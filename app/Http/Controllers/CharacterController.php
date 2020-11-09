<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

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

        $prev = parse_url($characters['info']['prev'], PHP_URL_QUERY);
        $next = parse_url($characters['info']['next'], PHP_URL_QUERY);
        return view(
            'front',
            [
                "characters" => $characters['results'],
                "prev" => $prev,
                "next" => $next
            ]
        );
    }

    public static function showSingleCharacter(Request $request)
    {

        $id = $request->id;

        $character = HTTP::get("https://rickandmortyapi.com/api/character/$id")->json();
        $episodes = [];
        foreach ($character['episode'] as $episode) {
            $single_episode = self::getEpisodeNames($episode);
            array_push($episodes, $single_episode);
        }

        return view(
            "character",
            [
                "character" => $character,
                "episodes" => $episodes,
                "page_title" => $character['name']
            ],
        );
    }

    public static function getEpisodeNames($episode)
    {

        $episode = HTTP::get($episode)->json();
        return $episode;
    }

    public static function search(Request $request)
    {

        $validatedData = $request->validate(
            [
                'name' => 'required|string',
                'species' => 'nullable|string',
                'status' => 'nullable|string',
                'gender' => 'nullable|string',
            ]
        );

        $name = $validatedData['name'];
        $species = $validatedData['species'];
        $status = $validatedData['status'];
        $gender = $validatedData['gender'];

        $page = $request->page;

        if ($page) {
            $results = HTTP::get("https://rickandmortyapi.com/api/character/?name=$name&species=$species&status=$status&gender=$gender&page=$page")->json();
        } else {
            $results = HTTP::get("https://rickandmortyapi.com/api/character/?name=$name&species=$species&status=$status&gender=$gender")->json();
        }

        if (isset($results['error'])) {

            return Redirect::back()->withErrors(['No results found, please try again!']);

        }

        if (isset($results['info'])) {
            $prev = parse_url($results['info']['prev'], PHP_URL_QUERY);
            $next = parse_url($results['info']['next'], PHP_URL_QUERY);
        }

        return view('results', [
            "results" => $results,
            "page_title" => "Search results",
            "prev" => $prev,
            "next" => $next
        ]);
    }
}
