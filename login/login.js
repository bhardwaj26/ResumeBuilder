const home = document.querySelector(".home")

// formContainer = document.querySelector(".form_container")
// signupBtn = document.querySelector("#signup")
// loginBtn = document.querySelector("#login")
var pwShowHide = document.getElementById('pw_hide')

// console.log(typeof pwShowHide)

    pwShowHide.addEventListener("click", () => {



        // console.log("Hererererer");
        let getPwInput = pwShowHide.parentElement.querySelector("input");
        if( getPwInput.type === "password"){
            getPwInput.type = "text";
            pwShowHide.classList.replace("uil-eye-slash", "uil-eye");
        }else{
            getPwInput.type = "password";
            pwShowHide.classList.replace("uil-eye", "uil-eye-slash");
        }
    })