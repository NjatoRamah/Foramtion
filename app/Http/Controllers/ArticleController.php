<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajoutarticle(Request $req){
        $this->validate($req,[
            "titre"=>"required",
            "soustitre"=>"required",
            "prix"=>"required",
            "image"=>"required |image|mimes:png,jpg,gif,jpeg",
            "description"=>"required",
        ]);
        if($req->hasFile('image')){
            $image = $req->file('image');
            $imageName = time() . '.' .$image->getClientOriginalExtension();
            $image->storeAS('images', $imageName, 'public');
            $article = new article;
            $article->Titre = $req->input('titre');
            $article->Soustitre = $req->input('soustitre');
            $article->Prix = $req->input('prix');
            $article->Description = $req->input('description');
            $article->image = $imageName;
            return view('admin.page.article.ajout');
        }
    }
}