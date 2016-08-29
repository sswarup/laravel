<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Session;
use Auth;

class ArticlesController extends Controller
{
    public function index(){
        return Auth::user();
        $user     = Session::get('user');
        $articles = Article::getArticles();
        return view('articles.index',compact('articles','user'));
    }
    
    public function show($id){
        $article = Article::findArticle($id);
        return view('articles.show',compact('article'));
    }
    
    public function create(){
        return view('articles.create');
    }
    
    public function add(ArticleRequest $request){
        $input = $request->all();
        $input['published_ad'] = Carbon::now();
        $article = Article::addArticle($input);
        return redirect('articles/'.$article->id);
    }
    
    public function remove($id){
        $article = Article::removeArticle($id);
        return redirect('articles');
    }
    
    public function edit($id){
        $article = Article::findArticle($id);
        return view('articles.edit',compact('article'));
    }
    
    public function update(ArticleRequest $request,$id){
        $article = $request->all();
        Article::updateArticle($id,$article);
        return redirect('articles/'.$id);
    }
}
