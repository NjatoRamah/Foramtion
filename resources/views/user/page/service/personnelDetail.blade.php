@extends('user.layout.master')
@section('contenues')
    


    <!-- Page Container -->
    <div class="w3-content w3-margin-top mt-5" style="max-width:1400px;">
    
      <!-- The Grid -->
      <div class="w3-row-padding">
       
        <!-- Left Column -->
        <div class="w3-third">
        
          <div class="w3-white w3-text-grey w3-card-4 mt-5">
            <div class="w3-display-container">
              <img src="{{ asset('storage/pdp/'.$personnel->pdp) }}" style="width:100%" alt="Avatar">
              <div class="w3-display-bottomleft w3-container w3-text-black">
                <h2>{{ $personnel->nom }} {{ $personnel->prenom }}</h2>
              </div>
            </div>
            <div class="w3-container">
              <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $personnel->poste }}</p>
              <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $personnel->sexe }}</p>
              <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $personnel->email }}</p>
              <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i> {{ $personnel->contact }}</p>
               
              
              <hr>
            </div>
          </div><br>
    
        <!-- End Left Column -->
        </div>
    
        <!-- Right Column -->
        <div class="w3-twothird mt-5">
        
            <div class="w3-container w3-card w3-white w3-margin-bottom">
              <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Experience du travaille</h2>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>{{ $personnel->poste }}</b></h5>
                
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span>{{ $personnel->dateentree }}</span></h6>
                <div class="w3-light-grey w3-round-xlarge w3-small mb-5">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                </div>
                <hr>
              </div>             
            </div>
          
          <div class="row">
            <div class="col-md-6 w3-container w3-card w3-white">
              
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Adresse</h2>
                <div class="w3-container">
                  <h5 class="w3-opacity"><b>Code postale</b></h5>
                    <h6 class="w3-text-teal">{{ $personnel->postale }}</h6>
                    <h5 class="w3-opacity"><b>Ville</b></h5>
                  <h6 class="w3-text-teal">{{ $personnel->ville }}</h6>
                    <h5 class="w3-opacity"><b> Adresse </b></h5>
                  <h6 class="w3-text-teal">{{ $personnel->adresse }}</h6>
                    <h5 class="w3-opacity"><b> Region </b></h5>
                  <h6 class="w3-text-teal">{{ $personnel->region }}</h6>
                    <h5 class="w3-opacity"><b> Provinces </b></h5>
                  <h6 class="w3-text-teal">{{ $personnel->province }}</h6>
                  <hr>
                </div>
            </div>
            <div class="col-md-6 w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Carte d'Identité Nationale</b></h2>
                <h5 class="w3-opacity"><b>Numero CIN</b></h5>
                <h6 class="w3-text-teal">{{ $personnel->cin }}</h6>
                <h5 class="w3-opacity"><b>Délivré à</b></h5>
                <h6 class="w3-text-teal">{{ $personnel->delivre }}</h6>
                <h5 class="w3-opacity"><b>Délivré le</b></h5>
                <h6 class="w3-text-teal">{{ $personnel->datedelivre }}</h6>
                <h5 class="w3-opacity"><b>Expiré le</b></h5>
                <h6 class="w3-text-teal">{{ $personnel->dateexpiration }}</h6>
                <hr>
            </div>
          </div>
        </div>
          
    
          
    
        <!-- End Right Column -->
        </div>
        
      <!-- End Grid -->
      </div>
      
      <!-- End Page Container -->
    </div>
    <div class="footer">
      <div class="col-lg-12">
          <div class="main-button-red">
              <a href="{{ url('/') }}">Retourner a la page d'acceuille</a>
          </div>
      </div>
  </div>
    @endsection