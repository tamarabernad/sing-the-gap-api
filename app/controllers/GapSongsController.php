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
        return Response::json(GapSong::all());
    }
}