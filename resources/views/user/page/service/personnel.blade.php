@section('title')
  Services
@endsection
<section class="services sec3 id">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            @foreach ($personnel as $personnels)
              <div class="content">
                <div class="cards home-img">
                    <div class="card-content">
                        <div class="image"><img src="{{ asset('storage/pdp/'.$personnels->pdp) }}" alt=""></div>
                        <div class="media-icons">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <i class="fab fa-github" aria-hidden="true"></i>
                        </div>
                        <div class="name-profession">
                            <span class="name" style="--j:1;">{{ $personnels->nom }} {{ $personnels->prenom }}</span>
                            <span class="profession">{{ $personnels->poste }}</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-stroke"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="buttons">
                            <button class="aboutMe">
                              @if (Session::has('client'))
                                <a href="{{ url('personnelDetail/'.$personnels->id) }}">Apropos de moi</a>
                              @else
                                <a href="#" style="button:disable">Apropos de moi</a>
                              @endif
                            </button>
                            
                        </div>
                      </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>