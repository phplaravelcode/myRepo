<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

//    public function articles(){
//        return $this->hasMany(Article::class);
//    }

    public function articles(){
        return $this->belongsToMany(Article::class , 'article_tag' , 'article_id' , 'tag_id');
    }
}
