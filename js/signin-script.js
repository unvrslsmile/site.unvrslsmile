$(function(){
    const joinbtn = $("#join-btn");
    const signinform = $("#signin-form");
    
    signinform.validate({
        errorPlacement: function(error, element) {
            if(element.attr("type") == "radio"){
                error.appendTo($("#for-gender"));
            }
            else{
                error.appendTo(element.next("small"));
            }
        },
        rules: {
            uusername: {
                required: true,
                minlength: 5,
            },
            ufname: {
                required: true,
                minlength: 2
            },
            ulname: {
                required: true,
                minlength: 2
            },
            bmonth: "required",
            bday: "required",
            byear: "required",
            ugender: "required",
            uemail: {
                required: true,
                email: true
            },
            upass: {
                required: true,
                minlength: 8
            },
            uconfpass: {
                required: true,
                minlength: 8,
                equalTo: "#uconfpass"
            }
        },
        messages: {
            uusername: {
                required: "You must provide a username.",
                minlength: "Minimum legnth is 5 characters."
            },
            ufname: {
                required: "Please provide your first name.",
                minlength: "Provide at least 2 characters."
            },
            ulname: {
                required: "Please provide your last name.",
                minlength: "Provide at least 2 characters."
            },
            ugender: "Please select one."
        }
    });
});