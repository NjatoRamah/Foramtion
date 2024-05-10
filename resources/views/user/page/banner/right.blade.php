@if (Session::has('client'))
    <button class="btn btn-warning" style="width:auto; background-color:brown">
        <a href="{{ Route('logout') }} " style="color:white;">Deconnexion<i class="fa fa-arrow-right ms-3"></i></a>
    </button>
@else
    <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color:rgb(88, 12, 12); color:white">Joignez nous</button>
    
@endif
    @include('user.page.banner.login')
    {{-- <div class='heart-rate'>
            <img src="{{asset('images/heart.png') }}" alt=""/>
            <span>Heart Rate</span>
            <span>Mb 156</span>
        
    </div> --}}
    <div class="right-infos">
        @include('user.page.contact.info')
    </div>
    
    <img src="{{asset('images/calcque.png') }}" alt="" class='hero-image' style="var(--i)"/>
    <img src="{{asset ('images/LOGOS.png') }}" alt="" class='hero-image-back' style="var(--i)"/>


