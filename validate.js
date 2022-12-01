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

//code for hiding or showing password input

const passInput = document.querySelector('#input-pass');
const eyeOpen = document.querySelector('.fa-eye');
const eyeClosed = document.querySelector('.fa-eye-slash');

eyeClosed.addEventListener('click', function() {
    this.classList.add('hide');
    eyeOpen.classList.add('show');
    passInput['type'] = "text";
});

eyeOpen.addEventListener('click', function() {
    this.classList.remove('show');
    eyeClosed.classList.remove('hide');
    passInput['type'] = "password";
})