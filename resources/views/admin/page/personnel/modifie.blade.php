@extends('admin.layout.master')
@section('title')
    Ajouter un nouveau personnel
@endsection
@section('contente')
<div class="containe" style="width: 100%, height:500px">
    <header>Inscription personnels</header>
    
    <form action="{{ Route('modpersonnel') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="form first" >
            <div class="details personal">
                <input type="hidden" name="id" value="{{ $personnel->id }}">
                <span class="title">Détails Personnel</span>
                    <div class="fields">
                        <div class="input-field">
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="" placeholder="Entrer le nom" required  value={{ $personnel->nom }}>
                    </div>
                    
                    <div class="input-field">
                        <label for="">prenom</label>
                        <input type="text" name="prenom" id="" placeholder="Entrer le prenom" required  value={{ $personnel->prenom }}>
                    </div>
                    
                    <div class="input-field">
                        <label for="">date de naissance</label>
                        <input type="text" name="datenaissance" id="" placeholder="Entrer le date de naissance" required  value={{ $personnel->datenaissance }}>
                    </div>
                    
                    <div class="input-field">
                        <label for="">Adresse email</label>
                        <input type="mail" name="email" id="" placeholder="Entrer le Adresse email" required  value={{ $personnel->email }}>
                    </div>
                    <div class="input-field">
                        <label for="">numero de telphone</label>
                        <input type="number" name="contact" id="" placeholder="Entrer le numero de telphone" required  value={{ $personnel->contact }}>
                    </div>
                    
                    <div class="input-field">
                        <label for="">Sexe</label>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="radio" name="sexe" 
                                @if (isset($genre) && $genre=="homme")@endif
                                value="homme" required  value={{ $personnel->sexe }}>Homme
                                <input type="radio" name="sexe" 
                                @if (isset($genre) && $genre=="femme")@endif
                                value="femme" required  value={{ $personnel->sexe }}>Femme    
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-field">
                        <label for="">Occupation</label>
                        <select name="poste_id" id="" class="form-control"  value={{ $personnel->poste_id }}>
                            <option value="{{ $personnel->poste_id }}">{{ $personnel->poste }}</option>
                        </select>
                    </div>
                    
                    <div class="input-field">
                        <label for="">matricule</label>
                        <input type="number" name="matricule" id="" placeholder="Entrer le date d'entrée" required  value={{ $personnel->matricule }}>
                    </div>
                    
                    <div class="input-field">
                        <label for="">date d'entrée</label>
                        <input type="text" name="dateentree" id="" placeholder="Entrer le date d'entrée" required  value={{ $personnel->dateentree }}>
                    </div> 
                    
                    <div class="input-field">
                        <label for="">image</label>
                        <input type="text" name="pdp" placeholder="ajouter votre profile" required  value={{ $personnel->pdp }}>
                        <input type="file" class="choose" name="pdp">
                    </div> 

                    <div class="input-field">
                        <label for="">mot de passe</label>
                        <input type="password" name="mdp" id="" placeholder="Entrer le mot de passe" required  value={{ $personnel->mdp }}>
                    </div>

                    <div class="input-field">
                        <label for="">confirmation mot de passe</label>
                        <input type="password" name="cmdp" id="" placeholder="Entrer le confirmation mot de passe" required  value={{ $personnel->mdp }}>
                    </div>

                    
                </div>
            </div>
           
        
        
            <div class="details personal">

                <span class="title">Détails Adresse</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">code postale</label>
                        <input type="number" name="postale" id="" placeholder="Entrer le code postale" required  value={{ $personnel->postale }}>
                    </div>
                    <div class="input-field">
                        <label for="">adresse</label>
                        <input type="text" name="adresse" id="" placeholder="Entrer votre adresse" required  value={{ $personnel->adresse }}>
                    </div>
                    <div class="input-field">
                        <label for="">ville</label>
                        <input type="text" name="ville" id="" placeholder="Entrer le ville" required  value={{ $personnel->ville }}>
                    </div>
                    <div class="input-field">
                        <label for="">region</label>
                        <input type="text" name="region" id="" placeholder="Entrer le region" required  value={{ $personnel->region }}>
                    </div>
                    <div class="input-field">
                        <label for="">province</label>
                        <input type="text" name="province" id="" placeholder="Entrer le province" required  value={{ $personnel->province }}>
                    </div>
                </div>
            </div>
            <div class="details de famille">

                <span class="title">Identité personnels</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="">numero de CIN</label>
                            <input type="number" name="cin" id="" placeholder="Entrer le numero de ID" required  value={{ $personnel->cin }}>
                        </div>                            
                        <div class="input-field">
                            <label for="">délivré a</label>
                            <input type="text" name="delivre" id="" placeholder="délivré a" required value={{ $personnel->delivre }}>
                        </div>
                        <div class="input-field">
                            <label for="">date de délivrance</label>
                            <input type="text" name="datedelivre" id="" placeholder="Entrer le date de délivrance" required  value={{ $personnel->datedelivre }}>
                        </div>
                        <div class="input-field">
                            <label for="">date d'expiration</label>
                            <input type="text" name="dateexpiration" id="" placeholder="Entrer le date d'expiration" required  value={{ $personnel->dateexpiration }}>
                        </div> 
                    </div>
                <div class="buttons">
                    <button type="submit" name="modpersonnel" class="btn btn-primary">
                        <span class="submit" >Enregistré</span>
                        <i class="fas fa-check"></i>
                     </button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('admin/js/registration.js') }}" defer></script>
@endsection
