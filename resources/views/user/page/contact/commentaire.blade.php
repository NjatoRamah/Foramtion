<section class="contact-us" id="homecontact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12 mb-5 ml-5">
              <form id="contact" action="{{ url('ajoutcommentaires/'.$articles->id) }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="commentaire" type="text" class="form-control" id="message" placeholder="VOTRE MESSAGE" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button" name="ajoutcommentaires">envoyer</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>