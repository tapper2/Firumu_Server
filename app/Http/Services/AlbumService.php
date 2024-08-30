<?php

namespace App\Http\Services;
use App\Album;
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
}
