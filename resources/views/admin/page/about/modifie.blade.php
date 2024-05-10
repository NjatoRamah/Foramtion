@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Poster un formation</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('modabouts') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="hidden" name="id" value="{{ $about->id }}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="titre" class="form-control" value="{{ $about->titre }}">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 mt-4">
                <textarea name="description" placeholder="Corps de l'article *" class="form-control">{{ $about->description }}</textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="Modifier" name="modabouts" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection