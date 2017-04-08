<?php

namespace App\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;

    public function getDetail(int $id){
        return Article::leftjoin('article_info',function($join){
                $join->on('article.id','=','article_info.aid');
        })->where('article.id',$id)->first();
    }
}
