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
                                <h6>{{ $annonce->titre }}</h6>
                                
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
                                                        <span>{{ $annonce->prix }} &euro;</span>
                                                    </div>
                                                    <div class="date">
                                                        <p><span>{{ $annonce->dateentree }}</span><h6></p>
                                                    </div>
                                                    <a href="{{ url('/') }}"><img src="{{ asset('storage/images/'.$annonce->image) }}" alt="" style="width:100%; height:1000px"></a>
                                                </div>
                                                <div class="down-content">
                                                    <h4>{{ $annonce->titre }} </h4>
                                                    
                                                    <p class="description">
                                                        {{ $annonce->description }}
                                                    </p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                 
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
