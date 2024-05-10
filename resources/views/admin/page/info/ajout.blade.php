@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Poster un formation</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('ajoutinfos') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="email" name="email" placeholder="Email *" class="form-control">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="Adresse" placeholder="Adresse *" class="form-control">
            </div>
        </div>
         <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="number" name="numero" placeholder="Contact rapide *" class="form-control">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-sm-3 mb-3">
                <input type="text" name="site" placeholder="site web officiel *" class="form-control">
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="poster!" name="ajoutinfos" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection