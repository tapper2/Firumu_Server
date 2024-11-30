<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CameraInfo extends Model
{
    protected $table = 'camerainfos';
    protected $fillable = [ 'name'];
}