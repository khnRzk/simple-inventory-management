$(document).ready(function(){
    var DOMINE = "http://localhost/inv_project/public_html";

  $('#register_form').on("submit",function () {
      var status = false;
      var name = $('#fullname');
      var email = $('#useremail');
      var type = $('#usertype');
      var password = $('#password');
      var c_pas = $('#c_password');
      var n_patt = new RegExp(/^[A-Za-z]+$/);
      var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z09]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

      if(name.val() == "" || name.val().length < 4) {
         name.addClass("border-danger");
         $("#u_error").html("<span class='text-danger'>Please enter your name with more than six characters</span>");
         status = false;
      } else {
         name.removeClass("border-danger");
         name.addClass("border-success");
         $("#u_error").html("");
         status = true;
      }

      if(!e_patt.test(email.val())) {
         email.addClass("border-danger");
         $("#e_error").html("<span class='text-danger'>Please enter valid email address</span>");
         status = false;
     } else {
         email.removeClass("border-danger");
         email.addClass("border-success");
         $("#e_error").html("");
         status = true;
     }

     if(password.val() == "" || password.val().length < 9) {
         password.addClass("border-danger");
         $("#p_error").html("<span class='text-danger'>Please enter password with minimum 9 charachters</span>");
         status = false;
     } else {
         password.removeClass("border-danger");
         password.addClass("border-success");
         $("#p_error").html("");
         status = true;
     }

     if(c_pas.val() == "" || c_pas.val().length < 9) {
         c_pas.addClass("border-danger");
         $("#cp_error").html("<span class='text-danger'>Please enter password with minimum 9 charachters</span>");
         status = false;
     } else {
         c_pas.removeClass("border-danger");
         c_pas.addClass("border-success");
         $("#cp_error").html("");
         status = true;
     }

     if(type.val() == "") {
         type.addClass("border-danger");
         $("#ut_error").html("<span class='text-danger'>Please select user type</span>");
         status = false;
     } else {
         type.removeClass("border-danger");
         type.addClass("border-success");
         $("#ut_error").html("");
         status = true;
     }

     if ((c_pas.val() == password.val()) && status == true) {
            $.ajax ({
                url : DOMINE+'/includes/process.php', 
                method : 'POST',
                data : $("#register_form").serialize(),
                success : function (data) {
                    if(data == "email_exists") {
                        alert("Email Already Exists !")
                    } else if (data == "Some_Error") {
                        alert("Something went wrong !")
                    } else {
                        window.location.href ="http://localhost/inv_project/public_html/index.php?msg=Your successfully registered, Login into continue..";
                    }
                }
            })     
     } else {
         c_pas.addClass("border-danger");
         $("#cp_error").html("<span class='text-danger'>Password mismatch</span>");
         status = false;
     }
    });

  //Login form
    $("#login_form").on("submit",function () {
        var email = $("#log_email");
        var pass = $("#log_password");
        var status = false;

        if(email.val() == "") {
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please enter email adress</span>");
            status = false;
        } else {
            email.removeClass("border-danger");
            email.addClass("border-success");
            $("#e_error").html("");
            status = true;
        }
        if(pass.val() == "") {
            pass.addClass('border-danger');
            $("#p_error").html("<span class='text-danger'>Please enter password</span>");
            status = false;
        } else {
            pass.removeClass("border-danger");
            pass.addClass("border-success");
            $("#p_error").html("");
            status = true;
        }
        if(status) {
            $.ajax ({
                url : DOMINE+'/includes/process.php', 
                method : 'POST',
                data : $("#login_form").serialize(),
                success : function (data) {
                    if(data == "NOT_REGISTERED") {
                        alert("Your not registered")
                    } else if (data == "PASSWORD_NOT_MATCH") {
                        alert("Incorrect Password")
                    } else {
                        window.location.href ="http://localhost/inv_project/public_html/dashboard.php";
                    }
                }
            })     
        }
    });
});