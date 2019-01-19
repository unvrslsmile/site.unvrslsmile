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
                minlength: 3,
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
                equalTo: "#pass"
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
        },
        submitHandler: function(form){
            $.ajax({
                url: "./lib/saveuserinfo.php",
                type: "POST",
                data: $("#signin-form").serialize(),
                cache: false,
                beforeSend: function(){
                    swal({
                        title: "Please wait",
                        text: "We're processing your information.",
                        icon: "info",
                        buttons: false,
                        closeOnClickOutside: false,
                        closeOnEsc: false
                    });
                },
                success: function(s){
                    if(s != "true"){
                        swal("Error", s, "info");
                    }
                    console.log(s);
                },
                error: function(e){
                    swal("Sorry", "Something went wrong", "danger");
                    console.log(e);
                },
                complete: function(){
                    swal({
                        title: "Done",
                        text: "Please wait to be redirected to your profile.",
                        icon: "success",
                        buttons: false,
                        closeOnClickOutside: false,
                        closeOnEsc: false
                    });
                    setTimeout(
                        function(){ window.location = "index.php" },
                        2500
                    );
                }
            });
        }
    });
});