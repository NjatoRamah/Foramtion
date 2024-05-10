

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('images/LOGOS.png') }}" style="width: 30px; height:30px">
            </div>
            <span class="logo_name">NJRFORMATION</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                
                <li><a href="{{ url('dash') }}">
                    <i class="fas fa-dashboard" aria-hidden="true"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="{{ url('liste') }}">
                    <i class="fas fa-chart-pie"></i>
                    <span class="link-name">Liste</span>
                </a></li>
                <li>
                    <div class="iocn-links">
                        <a href="#">
                            <i class="fas fa-chart-column"></i>
                            <span class="link-name">Ajouter un nouveaux</span>
                        </a>
                        <i class="fas fa-chevron-down arrow" aria-hidden="true"></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="#" class="link_name">nouveaux</a></li>
                        <li><a href="{{ url('ajoutpersonne') }}"><i class="fa fa-users" aria-hidden="true"></i>Personnels</a></li>
                        <li><a href="{{ url('ajoutannonce') }}"><i class="fa fa-share" aria-hidden="true"></i> Annonces</a></li>
                        <li><a href="{{ url('ajoutarticle') }}"><i class="fa fa-tasks" aria-hidden="true"></i> Article</a></li>
                        <li><a href="{{ url('ajoutabout') }}"><i class="fas fa-address-card" aria-hidden="true"></i> About</a></li>
                        <li><a href="{{ url('ajoutetudiant') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Etudiant</a></li>
                        <li><a href="{{ url('ajouttravaille') }}"><i class="fa fa-calculator" aria-hidden="true"></i> travaille</a></li>
                        <li><a href="{{ url('ajoutmatiere') }}"><i class="fas fa-book"></i> matiere</a></li>
                        <li><a href="{{ url('ajoutecolage') }}"><i class="fab fa-paypal" aria-hidden="true"></i> ecolage</a></li>
                        <li><a href="{{ url('ajoutpayment') }}"><i class="fas fa-euro"></i> payment</a></li>
                        <li><a href="{{ url('ajoutinfo') }}"><i class="fa fa-info" aria-hidden="true"></i> Configuration</a></li>
                    </ul>
                </li>
            
            </ul>
            <ul class="logout-mode">
                <li><a href="{{ Route('logout') }}">
                    <i class="fas fa-sign-out"></i>
                    <span class="link-name">deconnexion</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="fas fa-moon"></i>
                        <span class="link-name">dark</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
