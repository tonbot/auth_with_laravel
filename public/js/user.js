$(document).ready(function () {
    //login focus out
    $("#login").focusout(function () {
        MyApp.TOGGLE_ERROR_CONTAINER(null);
    });

    //create user focous out
    $("#create").focusout(function () {
        MyApp.TOGGLE_ERROR_CONTAINER(null);
    });

    //login
    $("#login").click(function () {
        user.AUTH();
    });

    //create user
    $("#create").click(function () {
        user.CREATE();
    });
});

var user = user || {};

//authenticate user
user.AUTH = function () {

    //get user input
    let email = $("#email").val();
    let password = $("#password").val();

    // validating user input 
 
    MyApp.LOADING_ALERT("Authenticating...", "please wait", 2000);

    // creating formdata 
    MyApp.FORM_DATA = {
        email: email,
        password: password,
    };

    //send json request
    MyApp.SEND_REQUEST(
        MyApp.FORM_DATA,
        MyApp.LOGIN_URL,
        function (responseCode, responseMessage, responseData) {
            switch (responseCode) {
                case 422:
                      MyApp.TOGGLE_ERROR_CONTAINER(responseMessage);
                    break;
                case 204:
                      MyApp.MESSAGE_ALERT(responseMessage, "error");
                      break;
                case 200:
                       MyApp.MESSAGE_ALERT(responseMessage, "success");
                       window.location="/dashboard";
                      break;
                default:
                    MyApp.MESSAGE_ALERT("Internal server error", "error");
                    break;
            }
        
        }
    );
};

//create new user
user.CREATE = function () {
   //get user input
   let fname = $("#fname").val();
   let lname = $("#lname").val();
   let email =  $("#email").val();
   let password =  $("#password").val();
   let cpassword = $("#cpassword").val();

   if(password !== cpassword){
        MyApp.TOGGLE_ERROR_CONTAINER("Password not match");
        return;
   }

   //form data
   MyApp.FORM_DATA = {
       first_name : fname,
       last_name  : lname,
       email      : email,
       password   : password,
   };

   //send json request
   MyApp.SEND_REQUEST(
       MyApp.FORM_DATA,
       MyApp.SIGNUP_URL,
       function (responseCode, responseMessage, responseData) {
            switch (responseCode) {
                case 422:
                      MyApp.TOGGLE_ERROR_CONTAINER(responseMessage);
                    break;
                case 204:
                      MyApp.MESSAGE_ALERT(responseMessage, "error");
                      break;
                case 200:
                       MyApp.MESSAGE_ALERT(responseMessage, "success");
                      break;
                default:
                    MyApp.MESSAGE_ALERT("Internal server error", "error");
                    break;
            }
       }
   );
};
