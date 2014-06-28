<?php
/**
 * Created by PhpStorm.
 * User: tamarabernad
 * Date: 05/06/14
 * Time: 17:50
 */

class GapSongsController extends BaseController
{

    /**
     * @return Response
     */
    public function getAll()
    {
        $gapSongs = GapSong::all();

        $gapSongsRes = array();


        foreach($gapSongs as $gapSongData){


            $categories = explode("|", $gapSongData->categories);
            $markers = explode("|", $gapSongData->markers);

            $gapSongRes = array(
                "uid"=>$gapSongData->id,
                "title" => $gapSongData->title_es,
                "url" => $gapSongData->gap_song_file,
                "characters" => $gapSongData->gap_num_characters,
                "duration"=> $gapSongData->gap_duration,
                "price"=>$gapSongData->price,
                "markers"=>$markers,
                "categories"=>$categories
            );
            array_push($gapSongsRes, $gapSongRes);
        }

        return Response::json($gapSongsRes);
    }

    public function getWithId($id){
        
        $gapSong = GapSong::find($id);

        $categories = explode("|", $gapSong->categories);
        $markers = explode("|", $gapSong->markers);
        $gapSongRes = array(
                "uid"=>$gapSong->id,
                "title" => $gapSong->title_es,
                "url" => $gapSong->gap_song_file,
                "characters" => $gapSong->gap_num_characters,
                "duration"=> $gapSong->gap_duration,
                "price"=>$gapSong->price,
                "markers"=>$markers,
                "categories"=>$categories
        );
        
        return Response::json($gapSongRes);
    }


}