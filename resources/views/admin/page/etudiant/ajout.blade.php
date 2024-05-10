@extends('admin.layout.master')
@section('title')
    Ajouter un nouveau etudiant
@endsection
@section('contente')
<div class="container">
    <header>Inscription etudiant</header>
    
    <form action="{{ Route('ajoutetudiants') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="form first">
            <div class="details personal">

                <span class="title">Détails Etudiant</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Entrer le nom" required>
                    </div>
                
                    <div class="input-field">
                        <label for="">prenom</label>
                        <input type="text" name="prenom" id="" placeholder="Entrer le prenom" required>
                    </div>
                
                    <div class="input-field">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="" placeholder="Entrer le Adresse email" required>
                    </div>
                    <div class="input-field">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="" placeholder="Entrer le numero de telphone" required>
                    </div>
                
                    <div class="input-field">
                        <label for="">Sexe</label>
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
                
                    <div class="input-field">
                        <label for="">Departement</label>
                        <select name="departement" id="" class="form-control">
                            @foreach ($matieres as $matiere)
                              <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="input-field">
                        <label for="">matricule</label>
                        <input type="number" name="matricule" id="" placeholder="Entrer le date d'entrée" required>
                    </div>
                
                    <div class="input-field">
                        <label for="">Photo</label>
                        <input type="file" name="pdp" class="choose" placeholder="ajouter votre profile" required>
                    </div> 
                </div>
            </div>
            
            <button type="submit" name="ajoutpersonnel">
                <span class="submit" >Enregistré</span>
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>
</div>
<script src="{{ asset('admin/js/registration.js') }}" defer></script>
@endsection
