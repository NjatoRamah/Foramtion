@extends('admin.layout.master')
@section('title')
    Ajouter un nouveau etudiant
@endsection
@section('contente')
<div class="container">
    <header>Inscription etudiant</header>
    
    <form action="{{ Route('modetudiants') }}" method="post" enctype="multipart/form-data">
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
                    <input type="hidden" name="id" value="{{ $etudiant->id }}">
                    <div class="input-field">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Entrer le nom" required  value={{ $etudiant->nom }}>
                    </div>
                
                    <div class="input-field">
                        <label for="">prenom</label>
                        <input type="text" name="prenom" id="" placeholder="Entrer le prenom" required  value={{ $etudiant->prenom }}>
                    </div>
                
                    <div class="input-field">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="" placeholder="Entrer le Adresse email" required  value={{ $etudiant->adresse }}>
                    </div>
                    <div class="input-field">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="" placeholder="Entrer le numero de telphone" required  value={{ $etudiant->contact }}>
                    </div>
                
                    <div class="input-field">
                        <label for="">Sexe</label>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="radio" name="sexe" 
                                @if (isset($genre) && $genre=="homme")@endif
                                value="homme" required  value={{ $etudiant->sexe }}>Homme
                                <input type="radio" name="sexe" 
                                @if (isset($genre) && $genre=="femme")@endif
                                value="femme" required  value={{ $etudiant->sexe }}>Femme    
                                
                            </div>
                        </div>
                    </div>
                
                    <div class="input-field">
                        <label for="">Departement</label>
                        <select name="departement" id="" class="form-control" value={{ $etudiant->departement }}>
                            <option value="departement" >call center</option>
                            <option value="departement" >devellopeur</option>
                            <option value="departement" >designer</option>
                        </select>
                    </div>
                
                    <div class="input-field">
                        <label for="">matricule</label>
                        <input type="number" name="matricule" id="" placeholder="Entrer le date d'entrée" required  value={{ $etudiant->matricule }}>
                    </div>
                
                    <div class="input-field">
                        <label for="">Photo</label>
                        <input type="text" name="pdp" placeholder="ajouter votre profile" required  value={{ $etudiant->pdp }}>
                        <input type="file" class="choose" name="pdp">
                    </div> 
                </div>
            </div>
            
            <button type="submit" name="modetudiants">
                <span class="submit" >Enregistré</span>
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>
</div>
<script src="{{ asset('admin/js/registration.js') }}" defer></script>
@endsection
