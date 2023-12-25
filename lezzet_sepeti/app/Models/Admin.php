<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\HasProfilePhotos;
use Laravel\Jetstream\HasProfilePhoto as JetstreamHasProfilePhoto;
use Laravel\Fortify\TwoFactorAuthenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasProfilePhotos, TwoFactorAuthenticatable;

}
