<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Modelislemleri extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = "admin_tablosu";
    protected $fillable = ["mail_adresi", "sifre", "created_at", "updated_at"];
}
