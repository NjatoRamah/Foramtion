const container = document.querySelector(".container"),
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
    