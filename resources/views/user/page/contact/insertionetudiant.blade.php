@extends('user.layout.master')
@section('title')
    Ajouter un nouveau etudiant
@endsection
@section('contenues')
<div class='hero'>
    <div class='left-hero'>
        <div class="suba-header">
            <div class="container">
                

                <div class="card m-5" style=" background-color:gray; border-radius:25px">

                <span class="ito">Inscription en ligne</span>
                
                    <form action="{{ Route('insertionetudiants') }}" method="post" enctype="multipart/form-data" class="m-5">
                        @csrf
                        @if ($errors)
                            @foreach ($errors->all() as $x)
                                <p class="text-danger">{{ $x }}</p>
                            @endforeach
                        @endif
                        <div class="form first">
                            <div class="details personal">

                                
                                <div class="fields">
                                    <div class="input-box">
                                        <input type="text" name="nom" id=""  required>
                                        <label for="">Nom</label>
                                    </div>
                                
                                    <div class="input-box">
                                        <input type="text" name="prenom" id=""required>
                                        <label for="">prenom</label>
                                    </div>
                                
                                    <div class="input-box">
                                        <input type="text" name="adresse" id=""  required>
                                        <label for="">Adresse</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="number" name="contact" id=""  required>
                                        <label for="">Contact</label>
                                    </div>
                                    <div class="input-box">
                                        <div class="checkbox-text">
                                            <div class="checkbox-content">
                                                <input type="radio" name="sexe" 
                                                @if (isset($genre) && $genre=="homme")@endif
                                                value="homme" required>Homme
                                                <input type="radio" name="sexe" 
                                                @if (isset($genre) && $genre=="femme")@endif
                                                value="femme" required>Femme
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="input-box">
                                        <select name="departement" id="" class="form-control">
                                            @foreach ($matieres as $matiere)
                                            <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                                            @endforeach
                                        </select>
                                        <label for="">Departement</label>
                                    </div>
                                    <div class="input-box">
                                        <input type="file" name="pdp" class="choose" required>
                                        <label for="">Photo</label>
                                    </div> 
                                </div>
                            </div>
                            
                            <button type="submit" class="peso circle" style="background:brown; ::hover"  name="ajoutpersonnel">
                                <span class="peso circle" style="color: white; background:brown" >Enregistré</span>
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <br>
        <div class="footer">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-lg-4">
                    <div class="main-button-red" >
                        <a href="{{ url('/') }}">Retour à la page d'acceuille</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <div class='right-hero'>
        @include('user.page.banner.right')
    </div>
</div>
            <script src="{{ asset('admin/js/registration.js') }}" defer></script>
@endsection
