<?php

namespace App\Http\Services;
use App\Album;
use App\Image;
Use \Carbon\Carbon;

class AlbumService
{

    public function __construct()
    {

    }

    public function addSingleAlbum(){
        $userId = request()->get('userId');
        $name = request()->get('name');
        $img = request()->get('albumImage');
        $e = explode(":", $img);

        if( $e[0] == 'data' && strlen($img)>300){
            $png_url = "album-".time().".jpg";
            $path = public_path() . "/uploads/" . $png_url;
            $img = request()->get('albumImage');
            $img = substr($img, strpos($img, ",")+1);
            $data = base64_decode($img);
            $success = file_put_contents($path, $data);
            $imgURL = $png_url ? $png_url : '';
        }

        $res = Album::create([
                'name' => $name,
                'userId' => $userId,
                'img'=> $imgURL
        ]);

        return $res;
    }


    public function addPhoto(){
        $Expose = request()->get('Expose');
        $camera = request()->get('camera');
        $fStop = request()->get('fStop');
        $caption = request()->get('caption');
        $film = request()->get('film');
        $isoRated = request()->get('isoRated');
        $lense = request()->get('lense');
        $lightAndShadow = request()->get('lightAndShadow');
        $shutterSpeed = request()->get('shutterSpeed');
        $img = request()->get('img');
        $albumId = request()->get('albumId');
       

        if( strlen($img)>300){
            $png_url = "album-".time().".jpg";
            $path = public_path() . "/uploads/" . $png_url;
            $img = request()->get('img');
            $img = substr($img, strpos($img, ",")+1);
            $data = base64_decode($img);
            $success = file_put_contents($path, $data);
            $imgURL = $png_url ? $png_url : '';
        }

       
        $res = Image::create([
                'name' => $imgURL,
                'albumId' => $albumId,
                'url' => $imgURL,
                'caption' => $caption,
                'camera' => $camera,
                'lense' => $lense,
                'isoRate' => $isoRated,
                'f_stop' => $fStop,
                'sutterSpeed' => $shutterSpeed,
                'overExpose' => $Expose,
                'avg_light_shadow' => $lightAndShadow,
                'film' => $film
        ]);

        return $res;
    }
}



