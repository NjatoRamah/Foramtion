@extends('admin.layout.master')
@section('contente')
  
    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <h4>Prix de l'article</h4>
                                        <span>{{ $annonce->prix }} &euro;</span>
                                    </div>
                                    <div class="date">
                                        <h4>Date entrée le</h4>
                                        <h6><span>{{ $annonce->dateentree }}</span></h6>
                                    </div>
                                    <hr>
                                        <img src="{{ asset('storage/images/'.$annonce->image) }}" alt="">
                                    <hr>
                                </div>
                                <div class="down-content">
                                    <h4>Titre</h4>
                                        <p>{{ $annonce->titre }} </p>
                                    
                                    <h4>Description</h4>
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
            <br>
        </div>
    </section>
        
@endsection