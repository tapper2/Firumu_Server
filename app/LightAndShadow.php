<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class LightAndShadow extends Model
{
    protected $table = 'light_and_shadow';
    protected $fillable = ['name'];
}