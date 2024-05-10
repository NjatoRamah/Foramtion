<section class="our-courses id" id="homeannonce">
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <div class="section-heading">
            <h2>Annonces</h2>
          </div>
          <div class="col-md-5"></div>
        </div>
      </div>
        <div class="row">
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            @foreach ($annonce as $annonce)
              <div class="item">
                <div class="carte">
                    <img src="{{ asset('storage/images/'.$annonce->image) }}" class="sary" alt="Course One">
                    <div class="sect3">
                        <h4 style="color: white" >{{ $annonce->titre }}</h4>
                        <div class="info">
                            <div class="row">
                            <h3>
                                <strong style="color:white">{{ $annonce->prix }}</strong>
                            </h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            </div>
                        </div>
                        <a href="{{ url('annonceDetail/'.$annonce->id) }}" type="submit" class="btn btn-warning">Plus d'infos</a>
                    </div>
                </div>
              </div>
            @endforeach 
          </div>
        </div>
      </div>
    </div>
  </section>