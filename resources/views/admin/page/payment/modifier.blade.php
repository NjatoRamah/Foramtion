@extends('admin.layout.master')
@section('contente')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-offset-3">
            <h1>Ajouter un nouveaux poste</h1>
        </div>
    </div>
    <form method="post" action="{{ Route('modpayments') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <input type="hidden" name="id" value="{{ $payments->id }}">
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Mois</label>
                    <select name="mois" id="" class="form-control">
                        <option value="mois">{{ $payments->mois }}</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Ecolage</label>
                    <select name="id_ecolages" id="" class="form-control">
                        @foreach ($ecolages as $ecolage)
                         <option value="{{ $ecolage->id }}">{{ $ecolage->prix }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-3">
                <div class="input-field">
                    <label for="">Etudiant</label>
                    <select name="id_etudiants" id="" class="form-control">
                        @foreach ($etudiants as $etudiant)
                            <option value="{{ $etudiant->id }}">{{ $etudiant->matricule }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <input type="submit" value="poster!" name="modpayments" class="btn btn-success form-control mt-3">
            </div>
        </div>
        
    </form>
</div>
@endsection