<div class="modal" id="id01">
    
    <div class="containers modal-content animate">
        <div class="forms" >
            <div class="form login">
                <span class="title">Login</span>
                    <span onclick="document.getElementById('id01').style.display='none'" style="z-index: 10000" class="close" title="Close Modal">&times;</span>
                <form action="{{ Route('conecter') }}" method="post">
                    @csrf
          
                    @if (Session::has('errors'))
                        <p class="text-danger text-center">{{ Session::get('errors') }}</p>
                        
                    @endif
          
                    <div class="input-field">
                        <input type="email" placeholder="Entrer votre email" name="email" required>
                        <i class="fa fa-envelope icon" aria-hidden="true"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="mdp" id="" class="password" placeholder="Entre votre mot de passe" required>
                        <i class="fas fa-lock icon"></i>
                        <i class="fas fa-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remenber me</label>
                        </div>
                        <a href="#" class="text">Mot de passe oublier!</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="connecter">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">
                        pour s'inscrire
                        <a href="#" class="text signup-link">cliquer ici</a>
                    </span>
                </div>
            </div>

        <!--INSCRIPTION-->
        
            @include('user.page.banner.inscription')
        </div>
    </div>
</div>