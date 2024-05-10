@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Poster un nouvelle article</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('modarticles') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <input type="hidden" name="id" value="{{ $article->id }}">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="titre" placeholder="Titre *" class="form-control" value="{{ $article->titre }}">
            </div>
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="soustitre" placeholder="Sous titre *" class="form-control" value="{{ $article->soustitre }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="prix" placeholder="prix *" class="form-control" value="{{ $article->prix }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="dateentree" placeholder="date d'entrée " class="form-control" value="{{ $article->dateentree }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="jours" placeholder="jours " class="form-control" value="{{ $article->jours }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="heures" placeholder="heures " class="form-control" value="{{ $article->heures }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="image" class="form-control" value="{{ $article->image }}">
                <input type="file" class="choose" name="image">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 mt-4">
                <textarea name="description" placeholder="Corps de l'article *" class="form-control">{{ $article->description }}</textarea>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="Enregistrer" name="modarticles" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection