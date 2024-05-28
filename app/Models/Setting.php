<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Setting extends Model implements TranslatableContract  , HasMedia
{
    use HasFactory ,  Translatable , SoftDeletes , InteractsWithMedia ;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['logo','favicon','facebook','linkedin','phone','email'];

}
