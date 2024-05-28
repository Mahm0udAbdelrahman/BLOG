<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContract
{
    use HasFactory , Translatable , SoftDeletes;

    public $translatedAttributes = ['title', 'content' , 'small_description' , 'tags' ];
    protected $fillable = ['image'];
}
