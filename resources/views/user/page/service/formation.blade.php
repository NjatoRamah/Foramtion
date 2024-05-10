<section class="apply-now" id="homeformation">
    <div class="container">
       
    <div class="row">
        <div class="col-md-5"></div>
            <div class="col-md-2">
                <div class="section-heading" style="float: center" >
                <h2>Apropos</h2>
                </div>
            </div>
        <div class="col-md-5"></div>
    </div>

    <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">      
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 mt-5" src="{{ asset('images/dev.jpg') }}" style="border-radius: 25%">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid mt-5" src="{{ asset('images/Business Helpdesk with Beautiful Woman Stock Image - Image of contact, online 8824623.jpg') }}" style="width: 85%; margin-top: 15%; border-radius: 25%">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100 mt-5" src="{{ asset('images/call.jpg') }}" style="border-radius: 25%">
                    </div>
                   
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 mt-5" src="{{ asset('images/Réseau Informatique(1).jpg') }}" style="border-radius: 25%">
                    </div>
                </div>
            </div>
            
          </div>
        </div>
        <div class="col-lg-6 mr-5">
          <div class="accordions is-first-expanded mr-5" style="width:100%;">
            @foreach ($formation as $abouts)
                <article class="accordion">
                    <div class="accordion-head">
                        <span>{{ $abouts->titre }} </span>
                        <span class="icon">
                            <i class="icon fa fa-chevron-right"></i>
                        </span>
                    </div>
                    <div class="accordion-body">
                        <div class="content">
                            <p >{{ $abouts->description }} </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        </div>
      </div>
    </div>
  </section>