<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [ 'name', 'url', 'caption','camera', 'lense', 'isoRate','f_stop', 'sutterSpeed', 'overExpose','avg_light_shadow', 'film', 'albumId'];
}

