<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','body','published_at'];
    
    public static function getArticles(){
        return Article::latest()->get();
    }
    
    public static function addArticle($input){
        return Article::create($input);
    }
    
    public static function findArticle($id){
        return Article::findOrFail($id);
    }
    
    public static function removeArticle($id){
        return Article::destroy($id);
    }
    
    public static function updateArticle($id,$article){
        return Article::where('id','=',$id)->update(array('title'=>$article['title'],'body'=>$article['body']));($id);
    }
}
