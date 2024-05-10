@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Poster un nouvelle annonce</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('modannonces') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="row mt-5">
            <input type="hidden" name="id" value="{{ $annonce->id }}">
            <div class="col-lg-12 col-sm-3 mb-3">
                <input type="text" name="titre" placeholder="Titre *" class="form-control" value="{{ $annonce->titre }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="prix" placeholder="prix *" class="form-control" value="{{ $annonce->prix }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="date" name="dateentree" placeholder="date d'entrée " class="form-control" value="{{ $annonce->dateentree }}">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="file" name="image" class="choose form-control" value="{{ $annonce->image }}">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 mt-4">
                <textarea name="description" placeholder="Corps de l'article *" class="form-control">{{ $annonce->description }}</textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="modifier" name="modannonces" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection