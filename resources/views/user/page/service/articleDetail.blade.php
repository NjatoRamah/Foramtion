@extends('user.layout.master')
@section('title')
    NJR FORMATION
@endsection
@section('contenues')
    <div class='hero'>
        <div class='left-hero'>
            <div class="suba-header">
                <section class="heading-page header-text" id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                @if (Session::has('client'))
                                    <button class="btn btn-warning" style="width:auto; background-color:brown">
                                        <a href="{{ Route('insertetudiant') }}" style="color:white;">Inscription en ligne<i class="fa fa-arrow-right ms-3"></i></a>
                                    </button>
                                @else
                                    <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="float: left; width:auto; background-color:rgb(88, 12, 12); color:white">Joinner nous</button>
                                    
                                @endif
                                <h6>{{ $articles->titre }}</h6>
                                <h2>{{ $articles->soustitre }}</h2>
                            </div>
                        </div>
                    </div>
                </section>                            
                <section class="meetings-page" id="meetings">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                        <div class="col-lg-12">
                                            <div class="meeting-single-item">
                                                <div class="thumb">
                                                    <div class="price">
                                                        <span>{{ $articles->prix }} &euro;</span>
                                                    </div>
                                                    <div class="date">
                                                        <p><span>{{ $articles->dateentree }}</span><h6><span>{{ $articles->jours }}</span></h6>
                                                            <h6><span>{{ $articles->heures }} heures</span></h6></p>
                                                    </div>
                                                    <a href="{{ url('/') }}"><img src="{{ asset('storage/images/'.$articles->image) }}" alt="" style="width:100%; height:1000px"></a>
                                                </div>
                                                <div class="down-content">
                                                    <h4>{{ $articles->titre }} </h4>
                                                    <p>{{ $articles->soustitre }}</p>
                                                    <p class="description">
                                                        {{ $articles->description }}
                                                    </p>
                                                    @if (Session::has('client'))
                                                        <div class="col-lg-12">
                                                            <div class="share">
                                                            <h5>faite votre reservation</h5>
                                                            <form action="{{ url('ajoutreservations/'.$articles->id) }}" method="POST" type="button" onsubmit="return confirm('voulez vous reserver une place')">
                                                                @csrf
                                                                <button class="main-button-red" type="submit" style="background-color:brown; border-radius:25px;" name="ajoutreservations">reservation</button>
                                                            </form>
                                                                <div alerte="vous êtes inscrit"></div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @if (Session::has('client'))
                        @include('user.page.contact.commentaire');
                    @endif
                    <div class="footer">
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="{{ url('/') }}">Retourner a la page d'acceuille</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('user.layout.footer')
           
        </div>
    </div>
    @endsection
