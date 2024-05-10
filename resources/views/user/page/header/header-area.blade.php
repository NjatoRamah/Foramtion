
<div class="header-area header-sticky">
    <nav class="main-nav">
        <!-- ***** Logo Start ***** -->
        <img src="{{asset ('images/LOGOS.png') }}" alt="" class='logo' style="float:left; width:9rem"/>
        <!-- ***** Logo End ***** -->
        <!-- ***** Menu Start ***** -->
        <ul class="nav">
            <li class="scroll-to-section"  style="--i:1;"><a href="#top" class="active">Accueil</a></li>
            <li class="scroll-to-section"  style="--i:3;"><a href="{{ url('#homeformation') }}">Apropos</a></li>
            <li class="has-sub" style="--i:4;">
                <a href="javascript:void(0)">Programme</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('#homearticle') }}" >Programme</a></li>
                    <li><a href="{{ url('articleDetail') }}">Liste programme</a></li>
                </ul>
            </li>
            <li class="scroll-to-section" style="--i:5;"><a href="{{url('#homeannonce')}}" >Annonce</a></li>
            @if (Session::has('client'))
            <li class="scroll-to-section" style="--i:6;"><a href="{{url('#homecontact')}}">Contacte</a></li>
            <li class="scroll-to-section" style="--i;7;"><a href="{{ Route('insertetudiant') }}">Inscription en ligne</a></li>
            @endif
        </ul>
                
        <a class='menu-trigger'>
            <span>Menu</span>
        </a>
        <!-- ***** Menu End ***** -->
    </nav>
</div>
