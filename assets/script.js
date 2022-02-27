$(document).ready(function () {

    $(".form-class").validate({
        rules: {
            phone: {
                required: true
            },
            name: {
                required: true,
                minlength: 3

            },
            email: {
                email: true,
                required: true
            },
            image: {
                required: true
            }


        },
        messages: {
            phone: {
                required: "This field is required"
            },
            name: {
                required: "Enter Full name",
                minlength: "Name should be at least 3 characters long"
            },
            email: {
                required: "This field is required"
            },
            image: {
                required: "This field is required"


            }



        },

    });

});

//email validation//


$(document).ready(function () {
    $("#inputEmail").keyup(function () {
        if (validateEmail()) {

            $("#inputEmail").css("border", "5px solid green");
            $("#emailMsg").html("<p>Valid</p>");
            $("#submit_button").prop("disabled", false);

        }
        else {

            $("#emailMsg").html("<p>Email must have @dcastalia</p>");
            $("#inputEmail").css("border", "5px solid red");
            $("#submit_button").prop("disabled", true);


        }

    });




});

function validateEmail() {

    var email = $("#inputEmail").val();
    var email_pattern = /^[a-z\d\.\-\_]{3,}@(dcastalia)[.]{1}[a-z]{2,10}$/;
    if (email_pattern.test(email)) {
        return true;
    }
    else {
        return false;
    }


}

// Phone Number Validation///

$(document).ready(function () {

    $("#inputNumber").keyup(function () {
        if (validatePhone()) {

            $("#inputNumber").css("border", "5px solid green");
            $("#phoneMsg").html("<p></p>");
            $("#submit_button").prop("disabled", false);

        }
        else {
            $("#inputNumber").css("border", "5px solid red");
            $("#phoneMsg").html("<p>Starts with +88 or 88 . (01) (3-9) then 8 digit number</p>");
            $("#submit_button").prop("disabled", true);

        }

    });
});


function validatePhone() {

    var phone_number = $("#inputNumber").val();
    var phone_pattern = /^(?:\+88|88)?(01[3-9]\d{8})$/;
    if (phone_pattern.test(phone_number)) {
        return true;

    }
    else {
        return false;
    }


}


// var emailcheck = document.getElementById('inputEmail').value;
// var phone_number = document.getElementById('inputNumber').value

// var email_pattern = /^[a-z\d\.\-\_]{3,}@(dcastalia)[.]{1}[a-z]{2,10}$/
// var phone_pattern = /^(?:\+88|88)?(01[3-9]\d{8})$/;

// function myfuc() {
//     if (email_pattern.test(emailcheck)) {
//         $("#inputEmail").css("border", "5px solid green");
//         $("#emailMsg").html("<p>Valid Email</p>");
//     }
//     if (phone_pattern.test(phone_number)) {
//         $("#inputNumber").css("border", "5px solid green");
//         $("#phoneMsg").html("<p>Valid Phone Number</p>");

//     }
//     else {
//         $("#inputEmail").css("border", "5px solid red");
//         $("#emailMsg").html("<p>InValid Email</p>");
//         $("#inputNumber").css("border", "5px solid red");
//         $("#phoneMsg").html("<p>InValid Phone Number</p>");

//     }
// }



// $(document).ready(function () {
//     // Submit button

//     if (validatePhone()&& (validateEmail())){
//         $("#submit_button").prop("disabled", false);
//     }
//     else {
//         $("#submit_button").prop("disabled", true);

//     }

// });
