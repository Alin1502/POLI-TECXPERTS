//ABANDONED
function validateAndSend(){
    var form_id = document.querySelector(".form").id;

    if(form_id === 'signup-form') {
        let cnt = 1;
        let username = document.getElementById("username").value,
        email = document.getElementById("email").value,
        birth_date = document.getElementById("birth-date").value,
        password = document.getElementById("password").value,
        confirm = document.getElementById("confirm").value;
        
        let error = document.getElementById("error-div");
        let succes = document.getElementById("succes-div");

        function validateEmail(addr) {
            var reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return reg.test(addr);
        }

        function minimumAge(date){
            var year = date.split("-")[0];      
            var present_year = new Date().getFullYear();

            if(present_year - year >= 14) return 1;
            else return 0;
        }

        if(username ==="" || email ==="" || password ===""
        || confirm ==="" || birth_date ===""){
            error.innerHTML = "Please complete all the fields!";
            cnt++;
            error.classList.remove("hidden");
        } else if(username.length < 5) {
            error.innerHTML = "Username must have at least 5 characters";
            cnt++;
            error.classList.remove("hidden");
        } else if(!validateEmail(email)){
            error.innerHTML = "Please enter a valid email address";
            cnt++;
            error.classList.remove("hidden");
        } else if(minimumAge(birth_date) === 0) {
            error.innerHTML = "Minimum age: 14 years old";
            cnt++;
            error.classList.remove("hidden");
        } else if(password.length < 8) {
            error.innerHTML = "Password must have at least 8 characters";
            cnt++;
            error.classList.remove("hidden");
        } else if(password !== confirm){
            error.innerHTML = "Passwords must match";
            cnt++;
            error.classList.remove("hidden");
        }

        //if all conditions pass, send form
        let submit = document.getElementsById('submit');
        if(cnt === 1) {
            submit.submit();
        }

    } 
} 

let submit = document.getElementById("submit");

submit.addEventListener("click", validateAndSend);
