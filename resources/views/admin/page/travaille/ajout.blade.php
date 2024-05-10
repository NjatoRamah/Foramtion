@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Ajouter un nouveaux poste</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('ajouttravailles') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <input type="text" name="poste" placeholder="poste *" class="form-control">
            </div>
            <div class="col-lg-4 col-sm-3">
                <input type="number" name="prix" placeholder="salaire unitaire" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="poster!" name="ajouttravaille" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection