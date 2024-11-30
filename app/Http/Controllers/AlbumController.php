<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Album;
use App\Image;
use App\LightAndShadow;
use App\CameraInfo;  
use App\Exposure;
use App\FilmInfo;
use App\Http\Services\AlbumService;
use App\Http\Services\ErrorsService;
use App\Http\Services\ResponseMessageService;

class AlbumController extends Controller
{
    public $AlbumService;
    public $error;
    public $response;

    public function __construct()
    {
        $this->AlbumService = new AlbumService();
        $this->error = new ErrorsService();
        $this->response = new ResponseMessageService();
    }

    public function getAllAlbumsById(){
        try{
            $id = request()->get('id');
            $res  = Album::where('userId', '=', $id)->get();
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון קבלת אלבומים',1,'getAllAlbumsById',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'getAllAlbumsById' ,  $e->getMessage());
        }
    }

    public function addSingleAlbum(){
        try{
            $res = $this->AlbumService->addSingleAlbum();
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון קבלת אלבומים',1,'getAllAlbumsById',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'getAllAlbumsById' ,  $e->getMessage());
        }
    }


    public function getSingleAlbumById(){
        try{
            $id = request()->get('id');
            $res  = Image::where('albumId', '=', $id)->get();
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון קבלת אלבומים',1,'getAllAlbumsById',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'getAllAlbumsById' ,  $e->getMessage());
        }
    }

    public function getSelectListItems(){
        try{
            $id = request()->get('id');
            $res;

            if($id == 1)
                $res  = CameraInfo::where('id', '>',0)->get();
            if($id == 2)
                $res  = LightAndShadow::where('id', '>',0)->get();
            if($id == 3)
                $res  = FilmInfo::where('id', '>',0)->get();
            if($id == 4)
                $res  = Exposure ::where('id', '>',0)->get();
           
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון קבלת אלבומים',1,'getAllAlbumsById',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'getAllAlbumsById' ,  $e->getMessage());
        }
    }

    public function addPhoto(){
        try{
            $res = $this->AlbumService->addPhoto();
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון הוספת תמונה',1,'addPhoto',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'addPhoto' ,  $e->getMessage());
        }
    }

    public function deletePhoto(){
        try{
            $id = request()->get('id');
            $res = Image::where('id', '=', $id)->delete();
            return $this->response->responseMessage($res , 200  , '1' , '');
        }catch(Exception $e){
            $this->error->insertError('','שגיאה בניסיון הוספת תמונה',1,'addPhoto',$e->getMessage());
            return $this->response->responseMessage(null , 500  , 'addPhoto' ,  $e->getMessage());
        }
    }
    
}
