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
                            <span>{{ $article->prix }} &euro;</span>
                            </div>
                            <div class="date">
                            <h6><span>{{ $article->dateentree }}</span></h6>
                            </div>
                            <div class="jours">
                                <h6><span>{{ $article->jours }}</span></h6>
                            </div>
                            <div class="heures">

                                <h6><span>{{ $article->heures }}</span> heures</h6>
                            </div>
                            </div>
                            <img src="{{ asset('storage/images/'.$article->image) }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ $article->titre }} </h4>
                            <p>{{ $article->soustitre }}</p>
                            <p class="description">
                                {{ $article->description }}
                            </p>
                            
                            </div>
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