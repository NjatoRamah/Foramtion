@extends('admin.layout.master')
@section('title')
    Ajouter un nouveau personnel
@endsection
@section('contente')
<div class="container">
    <header>Inscription personnels</header>
    
    <form action="{{ Route('ajoutpersonnel') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $x)
                <p class="text-danger">{{ $x }}</p>
            @endforeach
        @endif
        <div class="form first">
            <div class="details personal">

                <span class="title">Détails Personnel</span>
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
                        <label for="">date de naissance</label>
                        <input type="date" name="datenaissance" id="" placeholder="Entrer le date de naissance" required>
                    </div>
                    
                    <div class="input-field">
                        <label for="">Adresse email</label>
                        <input type="mail" name="email" id="" placeholder="Entrer le Adresse email" required>
                    </div>
                    <div class="input-field">
                        <label for="">numero de telphone</label>
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
                        <label for="">Occupation</label>
                        <select name="poste_id" id="" class="form-control">
                           @foreach ($travaille as $poste)   
                            <option value="{{ $poste->id }}">{{ $poste->poste }}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="">matricule</label>
                        <input type="number" name="matricule" id="" placeholder="Entrer le date d'entrée" required>
                    </div>
                    
                    <div class="input-field">
                        <label for="">date d'entrée</label>
                        <input type="date" name="dateentree" id="" placeholder="Entrer le date d'entrée" required>
                    </div> 
                    
                    <div class="input-field">
                        <label for="">image</label>
                        <input type="file" name="pdp" class="choose" placeholder="ajouter votre profile" required>
                    </div> 

                    <div class="input-field">
                        <label for="">mot de passe</label>
                        <input type="password" name="mdp" id="" placeholder="Entrer le mot de passe" required>
                    </div>

                    <div class="input-field">
                        <label for="">confirmation mot de passe</label>
                        <input type="password" name="cmdp" id="" placeholder="Entrer le confirmation mot de passe" required>
                    </div>

                    
                </div>
            </div>
            <div class="details ID">
                 <button class="nextBtn">
                    <span class="btnText" name="suivant">Suivant</span>
                    <i class="fas fa-chevron-right"></i>
                 </button>
            </div>
        </div>
        <div class="form second">
            <div class="details personal">

                <span class="title">Détails Adresse</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">code postale</label>
                        <input type="number" name="postale" id="" placeholder="Entrer le code postale" required>
                    </div>
                    <div class="input-field">
                        <label for="">adresse</label>
                        <input type="text" name="adresse" id="" placeholder="Entrer votre adresse" required>
                    </div>
                    <div class="input-field">
                        <label for="">ville</label>
                        <input type="text" name="ville" id="" placeholder="Entrer le ville" required>
                    </div>
                    <div class="input-field">
                        <label for="">region</label>
                        <input type="text" name="region" id="" placeholder="Entrer le region" required>
                    </div>
                    <div class="input-field">
                        <label for="">province</label>
                        <input type="text" name="province" id="" placeholder="Entrer le province" required>
                    </div>
                </div>
            </div>
            <div class="details de famille">

                <span class="title">Identité personnels</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="">numero de CIN</label>
                            <input type="number" name="cin" id="" placeholder="Entrer le numero de ID" required>
                        </div>                            
                        <div class="input-field">
                            <label for="">délivré a</label>
                            <input type="text" name="delivre" id="" placeholder="délivré a" required>
                        </div>
                        <div class="input-field">
                            <label for="">date de délivrance</label>
                            <input type="date" name="datedelivre" id="" placeholder="Entrer le date de délivrance" required>
                        </div>
                        <div class="input-field">
                            <label for="">date d'expiration</label>
                            <input type="date" name="dateexpiration" id="" placeholder="Entrer le date d'expiration" required>
                        </div> 
                    </div>
                <div class="buttons">
                    <button class="backBtn">
                        <i class="fas fa-chevron-right"></i>
                        <span class="btnText">Précédent</span>
                    </button>
                    <button type="submit" name="ajoutpersonnel">
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
