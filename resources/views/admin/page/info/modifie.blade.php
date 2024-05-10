@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Poster un formation</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('modinfos') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="hidden" name="id" value="{{ $info->id }}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="email" class="form-control" value="{{ $info->email }}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="Adresse" class="form-control" value="{{ $info->Adresse }}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="numero" class="form-control" value="{{ $info->numero }}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="site" class="form-control" value="{{ $info->site }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="Modifier" name="modinfos" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection