@section('title')
  Programme
@endsection
<section class="upcoming-meetings" id="homearticle">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Article</h2>
          </div>
        </div>
        <div class="col-lg-4" >
          <div class="categories">
            <h4>Liste des formations</h4>
            <ul>
              @foreach ($matiere as $item)
              <li style="list-style: disc">
                  {{ $item->matiere }}
              </li>
                @endforeach
            </ul>
            <div class="main-button-red">
              <a href="#">Tous les mettiers</a>
            </div>
          </div>
        </div>
        
        
        <div class="col-lg-8">
          <div class="row" style="width:100%;">
            @foreach ($article as $articles)
            
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>{{ $articles->prix }} &euro;</span>
                  </div>
                  <a href="{{ url('articleDetail/'.$articles->id) }}"><img src="{{ asset('storage/images/'.$articles->image) }}" alt="New Lecturer Meeting" style="height: 440px;"></a>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="date">
                        <h6><span>{{ $articles->dateentree }}</span>{{ $articles->jours }} <span>{{ $articles->heures }} heures</span></h6>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <a href="{{ url('articleDetail/'.$articles->id) }}"><h4>{{ $articles->titre }}</h4>
                        <p>{{ $articles->soustitre }}</p>
                      </a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="link-page">
              <a>{{ $article->links() }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>