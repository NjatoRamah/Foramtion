
  
 <!-- info section -->
 <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        <img src="{{asset ('images/LOGOS.png') }}" alt="" class='logo' style="float:left; width:5rem"/> 
        FORMATION CENTER
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Apropos
          </h5>
          <h6>
            Le Centre Formation a était créer en 2024 pour aidez les jeunnes afin de s'assurer un avenir professionnel
          </h6>
        </div>
        <div class="col-md-3">
          <h5>
            Les services
          </h5>
          <ul>
            <li>
              <a href="">
                DEV WEB
              </a>
            </li>
            <li>
              <a href="">
                CALL CENTER ANGLOPHONE FRANCOPHONE
              </a>
            </li>
            <li>
              <a href="">
                DESIGNEUR
              </a>
            </li>
            <li>
              <a href="">
                MAINTENANCE
              </a>
            </li>
            <li>
              <a href="">
                RESEAU
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Contacter nous
          </h5>
          <h6>
            Pour beneficier plus de notre services
          </h6>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Joinner nous
            </h5>
            <div class="form_container">
              @if (Session::has('client'))
              <button class="btn btn-warning" style="width:auto;">

                <a href="{{ Route('logout') }}" style="color: wheat">Deconnexion<i class="fa fa-arrow-right ms-3"></i></a>
              </button>
              @else
                <button class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Joignez nous</button>
              @endif
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="{{ asset ('images/fb.png') }}" alt="">
          </a>

          <a href="">
            <img src="{{ asset ('images/twitter.png') }}" alt="">
          </a>
          <a href="">
            <img src="{{ asset ('images/linkedin.png') }}" alt="">
          </a>
          <a href="">
            <img src="{{ asset ('images/instagram.png') }}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 site créer par
      <a href="https://mail.google.com/mail/u/0/">Ramahery Oninjatovo</a>
    </p>
  </section>
  <footer class="foter">
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</footer>
  <!-- footer section -->