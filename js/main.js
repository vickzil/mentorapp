$(document).ready(() =>{
    
// SIGN UP USER
    $('#role').change(function(e){
        let value = $('#role').val();
        (value == "mentee") ? $('#chooseMentor').removeClass('hide') : $('#chooseMentor').addClass('hide')
    });

    $(document).on('click', '#signupSubmit', function(e){
        e.preventDefault();
        // HIDE ALERT MESSAGE 
        clearFormMessage();

        // GET FORM VALUES
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var role = $('#role').val();
        var assigned_to = $('#assigned_to').val();
        var password = $('#password').val();
        var cpassword = $('#cpassword').val();

        // VALIDATE FORM INPUT
        if (firstname.length == 0 || lastname.length == 0 || email.length == 0 || role.length == 0 || cpassword.length == 0 || password.length == 0) {
            formMessage("Please fill out all fields", "alert-danger");
            return false;
        } else if (!validateEmail(email)) {
            formMessage("Invalid email Address", "alert-danger");
            return false;
        } else if (cpassword !== password) {
            formMessage("The password do not match", "alert-danger");
            return false;
        } else {
          var data = {
                'register': 1,
                'firstname': firstname,
                'lastname': lastname,
                'email': email,
                'role': role,
                'assigned_to': assigned_to,
                'password': password,
                'cpassword': cpassword,
            }

            // SEND TO PHP FILE FOR PROCESSING
            $.ajax({
                url: 'register.php',
                type: 'POST',
                data: data,
                success: function(response){
                    if (response === "success") {
                        formMessage("Registration Successfull!!", "alert-success");
                        window.location.replace("signin");
                        setTimeout(() => {
                            clearFormMessage();
                        }, 2000);
                    } else{
                        formMessage("Error!! Cannot Register this E-mail", "alert-danger");
                    }
                    console.log(response)
                },
            });
        }  
    });


// LOGIN A USER
    $(document).on('click', '#loginSubmit', function(e){
        e.preventDefault();
        // HIDE ALERT MESSAGE 
        clearFormMessage();

        // GET FORM VALUES
        var email = $('#login-email').val();
        var password = $('#login-password').val();

        // VALIDATE FORM INPUT
        if (email.length == 0 || password.length == 0) {
            formMessage("Please fill out all fields", "alert-danger");
            return false;
        } else if (!validateEmail(email)) {
            formMessage("Invalid email Address", "alert-danger");
            return false;
        } else {

          var data = { 'login': 1, 'email': email, 'password': password }

            // SEND TO PHP FILE FOR PROCESSING
            $.ajax({
                url: 'login.php',
                type: 'POST',
                data: data,
                success: function(response){
                    if (response === "success") {
                        formMessage("Login Successfull!!", "alert-success");
                        window.location.replace("index");
                        setTimeout(() => {
                            clearFormMessage();
                        }, 2000);
                    } else{
                        formMessage("Error!! Cannot Register this E-mail", "alert-danger");
                    }
                    console.log(response)
                },
            });
        }





    });


});

// VALIDATE EMAIL FUNCTION
function validateEmail(email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return emailReg.test(email);
}

// FORM MESSAGE
function formMessage(message, alertType) {
	$('.messageAlert').removeClass("hide");
    $('.messageAlert').addClass(alertType);
    $('#message').text(message);
}


// CLEAR/HIDE FORM MESSAGE
function clearFormMessage() {
	$('.messageAlert').addClass("hide");
    $('#message').text("");
}