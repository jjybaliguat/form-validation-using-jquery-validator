$(function() {

    $.validator.setDefaults({
      errorClass: 'error',
      highlight: function(element) {
        $(element)
          .closest('input')
          .addClass('with-error');
      },
      unhighlight: function(element) {
        $(element)
          .closest('input')
          .removeClass('with-error');
      },
    });

$(function(){
    var login = $('#Login');

    if(login.length){
        login.validate({
            rules:{
                user:{
                    required: true,
                },
                pass:{
                    required: true,
                }
            },
            messages:{
                user:{
                    required: 'Email or Phone number is required!'
                },
                pass:{
                    required: 'Password is required!'
                }
            }
        })
    }
});

});