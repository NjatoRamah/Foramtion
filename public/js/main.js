const container = document.querySelector(".containers"),
    pwSlowHide = document.querySelectorAll('.showHidePw'),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");

    //js code to show/hide password and change icon
    pwSlowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if (pwField.type === "password") {
                    pwField.type = "text";

                    pwSlowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye-slash","fa-eye");
                    })
                } else {
                    pwField.type = "password";

                    pwSlowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye","fa-eye-slash");
                    })
                }
            })
        })
    })
    //js code to appear signup and login form
    signUp.addEventListener("click",( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click",( )=>{
        container.classList.remove("active");
    })
    //w3schols login
    let modal = document.getElementById('id01');
    window.onclick = function(event){
        if(event.target == modal){
            modal.style.display = "none"
        }
    }
	 let modals = document.getElementById('id03');
    window.onclick = function(event){
        if(event.target == modals){
            modal.style.display = "none"
        }
    }
    
	$('.owl-service-item').owlCarousel({
		items:3,
		loop:true,
		dots: true,
		nav: true,
		autoplay: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:3
			  }
		  }
	  })

	$('.owl-courses-item').owlCarousel({
		items:4,
		loop:true,
		dots: true,
		nav: true,
		autoplay: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:4
			  }
		  }
	  })
	
function scroll(){
	let scrol = window.scrollY;
	let w = window.innerWidth;
	let scrol1 = document.querySelector('id');
	if(scrol>450){
		scrol1.classList.add('active');
	}
}
setInterval(scroll,100);
/*slider*/
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');

let countItem = items.length;
let itemActive = 0;

next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0
    }
    showSlider();
}
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showSlider(){
    let itemActiveOld = document.querySelector('.slider .list .item.active')
    itemActiveOld.classList.remove('active');
    items[itemActive].classList.add('active');

}



/*partenaria*/
let otems = document.querySelectorAll('.partenaria .list .otem');
let suivant = document.getElementById('suivant');
let precedent = document.getElementById('precedent');
let thumbnails = document.querySelectorAll('.thumbnail .otem');

let countotem = otems.length;
let otemActive = 0;

suivant.onclick = function(){
	otemActive = otemActive + 1;
	if(otemActive >= countotem){
		otemActive = 0
	}
	showpartenaria();
}
precedent.onclick = function(){
	otemActive = otemActive - 1;
	if(otemActive < 0){
		otemActive = countotem - 1;
	}
	showpartenaria();
}
let refreshIntervals = setInterval(() => {
	suivant.click();
}, 5000)
function showpartenaria(){
	let otemActiveOld = document.querySelector('.partenaria .list .otem.active');
	let thumbnailActiveOld = document.querySelector('.thumbnail .otem.active');
	otemActiveOld.classList.remove('active');
	thumbnailActiveOld.classList.remove('active');
	otems[otemActive].classList.add('active');
	thumbnails[otemActive].classList.add('active');
	
}