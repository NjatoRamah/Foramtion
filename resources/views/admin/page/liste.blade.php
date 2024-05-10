@extends('admin.layout.master')
@section('contente')
    

<div class="dash-content mb-5">
    <div class="overview">
        <div class="title">
                <i class="fas fa-dashboard"></i>
                <span class="text">LISTE</span>
        </div>
        <div class="boxes">
            <a class="box box1 mt-4" href="{{ url('listearticle') }}" style="list-style: none">
                <!--<i class="fas fa-thumbs-up"></i>-->
                <i class="fas fa-database"></i>                
                <span class="text">Article</span>
                
                <span class="number">
                    {{ $nbArt }}
                </span>
            </a>
            <a class="box box2 mt-4" href="{{ url('listeclient') }}">
                <i class="fas fa-user"></i>
                <span class="text">Client</span>
                <span class="number">
                    {{ $nbClt }}
                </span>
            </a>
            <a class="box box4 mt-4" href="{{ url('listepersonnel') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Personnels</span>
                <span class="number">
                    {{ $nbpers }}
                </span>
            </a>
            <a class="box box3 mt-4" href="{{ url('listeannonce') }}">
                <i class="fas fa-share"></i>
                
                <span class="text">Annonces</span>
                <span class="number">
                    {{ $nbann }}
                </span>
            </a>
            <a class="box box5 mt-4" href="{{ url('listeabout') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">formation</span>
                <span class="number">
                    {{ $nbfor }}
                </span>
            </a>
            <a class="box box1 mt-4" href="{{ url('listeetudiant') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Etudiant</span>
                <span class="number">
                    {{ $nbetu }}
                </span>
            </a>
            <a class="box box2 mt-4" href="{{ url('listepayment') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">payment</span>
                <span class="number">
                    {{ $nbpay }}
                </span>
            </a>
            <a class="box box3 mt-4" href="{{ url('listematiere') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Matiere</span>
                <span class="number">
                    {{ $nbmat }}
                </span>
            </a>
            <a class="box box4 mt-4" href="{{ url('listetravaille') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Travaille</span>
                <span class="number">
                    {{ $nbtrav }}
                </span>
            </a>
            <a class="box box5 mt-4" href="{{ url('listeecolage') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Ecolage</span>
                <span class="number">
                    {{ $nbecol }}
                </span>
            </a>
            <a class="box box1 mt-4" href="{{ url('listecontact') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Contact</span>
                <span class="number">
                    {{ $nbcont }}
                </span>
            </a>
            <a class="box box1 mt-1" href="{{ url('listereservation') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Reservations</span>
                <span class="number">
                    {{ $nbreser }}
                </span>
            </a>
            <a class="box box1 mt-2" href="{{ url('listecommentaire') }}">
                <!--<i class="fas fa-share"></i>-->
                <i class="fa fa-users"></i>
                <span class="text">Commentaires</span>
                <span class="number">
                    {{ $nbComm }}
                </span>
            </a>
        </div>
    </div>
</div>
@yield('liste')
@endsection