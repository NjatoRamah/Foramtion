<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetController extends Controller
{
    public function home(){
        // $annonce = DB::table('annonce')->orderByDesc('id')->get();
        // $article = DB::table('article')->orderBy('id')->get();
        // $contact = DB::table('contact')->orderBy('id')->get();
        // $formation = DB::table('formation')->orderBy('id')->get();
        // $personnel = DB::table('personnel')->orderByDesc('id')->get();
        
        
        return view('welcome');
        // return view('welcome',['article'=>$article]);
    }
    public function welcome(){
        $matiere = DB::table('matieres')->orderByDesc('id')->get();
        $annonce = DB::table('annonces')->orderByDesc('id')->get();
        $article = DB::table('articles')->orderBy('id')->simplepaginate(4);
        $client = DB::table('users')->orderBy('id')->get();
        $contact = DB::table('contacts')->orderBy('id')->get();
        $formation = DB::table('formations')->orderBy('id')->get();
        $info = DB::table('infos')->orderBy('id')->get();
        $personnel = DB::table('personnels')->Join('travailles','personnels.poste_id','=','travailles.id')->get();
        
        
        return view('welcome', compact('annonce','article','contact','formation','personnel','client','matiere','info'));
    }
    public function homeannonce(){
        $annonce = DB::table('annonce')->orderByDesc('id')->get();
        return view('welcome');
    }
    public function homearticle(){
        $article = DB::table('article')->orderByDesc('id')->get();
        return view('welcome');
    }
    public function homeformation(){
        return view('welcome');
    }
    public function homepersonnel(){
        $personnel = DB::table('personnels')->where('id',$id)->first();
        
        return view('welcome',compact('personnel'));
    }
    public function homecontact(){
        return view('welcome');
    }
    public function homeinformation(){
        return view('welcome');
    }
    public function homeslider(){
        return view('welcome');
    }
    public function homearchives(){
        return view('welcome');
    }
    public function annonce(){
        $annonce = DB::table('annonces')->where('id',$id)->first();
        return view('user/page/service/annonce', compact('annonce'));
    }
    public function article(){
        $article = DB::table('articles')->where('id',$id)->first();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user/page/service/article', compact('article','info'));
    }
    public function formation(){
        return view('user/page/service/formation');
    }
    public function personnel(){
        return view('user/page/service/personnel');
    }
    public function contact(){
        return view('user/page/contact/contact');
    }
    public function information(){
        return view('user/page/contact/information');
    }
    public function slider(){
        return view('user/page/banner/slider');
    }
    public function archives(){
        return view('user/page/service/archives');
    }
    public function login(){
        return view('user.page.banner.login');
    }
    public function inscription(){
        return view('user.page.banner.inscription');
    }
    public function articleDetail(){
        $article = DB::table('articles')->where('id',$id)->first();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user.page.service.articleDetail', compact('article','info'));
    }
    public function annonceDetail(){
        $annonce = DB::table('annonces')->where('id',$id)->first();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user.page.service.annonceDetail', compact('annonce','info'));
    }
    public function personnelDetail($id){
        $personnel = DB::table('personnels')->where('id',$id)->first();
        $travaille = DB::table('travailles')->where('travailles.id',$personnel->poste_id)->get();
        $info = DB::table('infos')->orderBy('id')->get();
        return view('user/page/service/personnelDetail', compact('personnel','info','travaille'));
    }
}