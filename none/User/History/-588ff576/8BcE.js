
function validateAndSend(){
    var form_id = document.querySelector(".form").id;

    if(form_id === 'signup-form') {
        let username = document.getElementById("username").value,
        email = document.getElementById("email").value,
        birth_date = document.getElementById("birth-date").value,
        password = document.getElementById("password").value,
        confirm = document.getElementById("confirm").value;
        
        let error = document.getElementById("error-div");
        let succes = document.getElementById("succes-div");
        error.classList.toggle("hidden");
        succes.classList.toggle("hidden");
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
            error.classList.remove("hidden");
        } else if(username.length < 5) {
            error.innerHTML = "Username must have at least 5 characters";
            error.classList.remove("hidden");
        } else if(!validateEmail(email)){
            error.innerHTML = "Please enter a valid email address";
            error.classList.remove("hidden");
        } else if(minimumAge(birth_date) === 0) {
            error.innerHTML = "Minimum age: 14 years old";
            error.classList.remove("hidden");
        } else if(password.length < 8) {
            error.innerHTML = "Password must have at least 8 characters";
            error.classList.remove("hidden");
        } else if(password !== confirm){
            error.innerHTML = "Passwords must match";
            error.classList.remove("hidden");
        }

        let form_element = document.getElementsByTagName('input');

        let form_data = new FormData();

        for(let count = 0; count < form_element.length; count++) {
            form_data.append(form_element[count].name, form_element[count].value);
        }
        console.log(form_data);
        let ajax_req = new XMLHttpRequest();
        
        ajax_req.open('POST', 'signup.php');

        ajax_req.send(form_data);

        ajax_req.onreadystatechange = function() {
            document.getElementById('signup-form').reset();
            error.classList.toggle("hidden");
            succes.classList.remove("hidden");
            succes.innerHTML = "Account registered successfully";
        }

    }
} else if(form_id === 'login-form') {
    let username = document.getElementById("username").value,
    password = document.getElementById("password").value;
}

let submit = document.getElementById("submit");

submit.addEventListener("click", validateAndSend);
