@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-sm-offset-3">
            <h1>Ajouter un nouveaux poste</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('ajoutecolages') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <label for="">Prix</label>
                <input type="text" name="prix" placeholder="prix *" class="form-control">
            </div>
        </div>
        
            
        
            <div class="row mt-3">
                <div class="col-lg-4 col-sm-3">
                    <div class="input-field">
                        <label for="">Matieres</label>
                        
                        <select name="id_matieres" id="" class="form-control">
                            @foreach ($matieres as $matiere)
                              <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
            </div>
        
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <input type="submit" value="poster!" name="ajoutecolage" class="btn btn-success form-control mt-3">
            </div>
        </div>
    </form>
</div>
@endsection