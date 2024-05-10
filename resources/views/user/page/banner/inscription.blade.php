<div class="form signup">
    <span class="title">Inscription</span>

        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form action="{{ Route('inscrire') }}" method="post"  enctype="multipart/form-data">

        @csrf
        @if (Session::has('errors'))
            <p class="text-danger text-center">{{ Session::get('errors') }}</p>
        
        @endif
        <div class="input-field">
            <input type="text" placeholder="Entrer votre nom" name="nom" required>
            <i class="fa fa-user icon" aria-hidden="true"></i>
        </div>
        <div class="input-field">
            <input type="email" placeholder="Entrer votre email" name="email" required>
            <i class="fa fa-envelope icon" aria-hidden="true"></i>
        </div>
        <div class="input-field">
            <input type="password" name="mdp" id="" class="password" placeholder="Entre votre mot de passe" required>
            <i class="fas fa-lock icon"></i>
        </div>
        <div class="input-field">
            <input type="password" name="cmdp" id="" class="password" placeholder="Confirmer votre mot de passe" required>
            <i class="fas fa-lock icon"></i>
            <i class="fas fa-eye-slash showHidePw"></i>
        </div>
        <div class="input-field">
            <i class="fa fa-users" aria-hidden="true"></i>
            <input type="file" name="pdp" class="choose" placeholder="Entrer votre email" required>
        </div>
       
        <div class="input-field button">
            <input type="submit" value="Inscrire" name="inscrire">
        </div>

    </form>

    <div class="login-signup">
        <span class="text">
            pour se connecter
            <a href="#" class="text login-link">cliquer ici</a>
        </span>
    </div>
</div>