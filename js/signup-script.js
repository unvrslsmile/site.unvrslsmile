$(function(){
    const pnstack = {'dir1': 'down', 'dir2': 'right', 'modal': true};
    const joinbtn = $("#join-btn");
    const signinform = $("#signup-form");
    
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
                data: $("#signup-form").serialize(),
                cache: false,
                beforeSend: function(){
                    $("#join-btn").val("Please Wait").prop('disabled', true);
                },
                success: function(s){
                    if(s != "true"){
                        setTimeout(
                            function(){ $("#join-btn").val("Join").prop('disabled', false); },
                            2500
                        );
                        new PNotify({
                            title: "Error",
                            text: "An error ocurred on our side...",
                            type: "danger",
                            cornerclass: 'ui-pnotify-sharp'
                        });
                    }
                    else{
                        $("#join-btn").val("Done").prop('disabled', true);
                        new PNotify({
                            title: "Done",
                            text: "Please wait...",
                            type: "success",
                            cornerclass: 'ui-pnotify-sharp'
                        });
                        setTimeout(
                            function(){ window.location = "signin.php" },
                            2500
                        );
                    }
                    console.log(s);
                },
                error: function(e){
                    setTimeout(
                        function(){ $("#join-btn").val("Join").prop('disabled', false); },
                        2500
                    );
                    new PNotify({
                        title: "Error",
                        text: "Please refresh the page",
                        type: "danger",
                        cornerclass: 'ui-pnotify-sharp'
                    });
                    console.log(e);
                }
            });
        }
    });
});