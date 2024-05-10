<section class="contact-us" id="homecontact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="perso mt-5">
                <div class="login-box">
                    <form action="{{ Route('ajoutcontacts') }}" method="post">
                      @csrf
                        @if (Session::has('errors'))
                            <p class="text-danger text-center">{{ Session::get('errors') }}</p>
                        
                        @endif
                        <h2 class="ito">Contactez nous</h2>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="nom" id="" required>
                            <label for="">nom</label>
                        </div>
                        <div class="input-box">
                          <span class="icon">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                          </span>
                          <input type="text" name="email" id="" required>
                          <label for="">email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fas fa-message"></i>
                            </span>
                            <input type="textarea" name="description" id="" required>
                            <label for="">Message</label>
                        </div>
                        <button class="peso circle" type="submit" name="ajoutcontacts">Envoyer</button>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            @include('user.page.contact.info')
          </div>
        </div>
      </div>
    </div>
  </section>