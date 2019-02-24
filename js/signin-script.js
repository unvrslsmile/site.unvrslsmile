$(function(){
    const signinform = $("#signin-form");
    
    signinform.validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.next("small"));
        },
        rules: {
            uusername: {
                required: true
            },
            upassword: {
                required: true
            }
        },
        messages: {
            uusername: {
                required: "You must provide a username."
            },
            ufname: {
                required: "Please provide your first name."
            }
        },
        submitHandler: function(){
            $.ajax({
                url: "./lib/verifyuserinfo.php",
                type: "POST",
                data: $("#signin-form").serialize(),
                cache: false,
                beforeSend: function(){
                    $("input[name='u-signin']").val("Please Wait").prop('disabled', true);
                },
                success: function(s){
                    if(s != "true"){
                        $("input[name='u-signin']").prop('disabled', false);
                        new PNotify({
                            title: "Error",
                            text: "Sorry, an error ocurred on our side... Please try again.",
                            type: "danger",
                            cornerclass: 'ui-pnotify-sharp'
                        });
                    }
                    else{
                        $("input[name='u-signin']").val("Done").prop('disabled', true);
                        new PNotify({
                            title: "Done",
                            text: "Please wait...",
                            type: "success",
                            cornerclass: 'ui-pnotify-sharp',
                            hide: false,
                            buttons: {
                                closer: false,
                                sticker: false
                            },
                            mobile: {
                                swipe_dismiss: false
                            }
                        });
                        setTimeout(
                            function(){ window.location = "index.php" },
                            2500
                        );
                    }
                    console.log(s);
                },
                error: function(e){
                    $("input[name='u-signin']").val("Sign In").prop('disabled', false);
                    new PNotify({
                        title: "Error",
                        text: "An error ocurred. Please Refresh the page.",
                        type: "danger",
                        cornerclass: 'ui-pnotify-sharp'
                    });
                    console.log(e);
                }
            });
        }
    });
});