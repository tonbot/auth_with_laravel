var MyApp = MyApp || {};

MyApp.RESPONSE = "";

MyApp.url = "";

MyApp.LOGIN_URL = "/login/auth";

MyApp.SIGNUP_URL = "/register/user";

MyApp.FORM_DATA = {};

// Define the loadingAlert function within the namespace
MyApp.LOADING_ALERT = function (title, text, time) {
    swal({
        title: title,
        text: text,
        icon: "../images/loading.gif",
        timer: time,
        button: false,
    }).then(
        function () {},
        function (dismiss) {
            if (dismiss === "timer") {
            }
        }
    );
};

//message alert function
MyApp.MESSAGE_ALERT = function (title, icon) {
    swal({
        title: title,
        icon: icon,
    });
};

//toggle error container
MyApp.TOGGLE_ERROR_CONTAINER = function (text) {
    if (text !== "" && text !== null) {
        $(".errorContainer").removeClass("d-none");
        $(".errorContainer").text(text);
        return;
    }

    $(".errorContainer").addClass("d-none");
    $(".errorContainer").text("");
};

MyApp.SEND_REQUEST = function (data, url, callbackFunction) {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: url,
        dataType: "json",
        contentType: "application/json",
        method: "POST",
        data: JSON.stringify(data),
        success: function (response) {
            callbackFunction(response.code, response.message, response.data);
        },
        error: function (error) {
            callbackFunction(error.status, error.responseJSON.message, "");
        },
    });
};
