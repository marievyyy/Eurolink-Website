      
    $(document).ready(function(){
      var url = window.location.href;
      if(url.split('=').length != 0){
        var getReturn = url.split('=');
        var returnData = getReturn[1];
        if(returnData == "false"){
          //Modal for error sending of email
          $("#myModalerror").modal('show');
          $("#error").text('There has been an error. Please try again!');
        } else if(returnData == "true"){
          //Modal for success sending of email
          $("#myModal").modal('show');
          $("#confirmationMessage").text('Your message has been sent successfully. Thank you!');
        }
      }
    }); 
      
  

     $(document).ready(function() {
    // Test for placeholder support
      $.support.placeholder = (function(){
          var i = document.createElement('input');
          return 'placeholder' in i;
      })();

      // Hide labels by default if placeholders are supported
      if($.support.placeholder) {
          $('.form-label').each(function(){
              $(this).addClass('js-hide-label');
          });  

          // Code for adding/removing classes here
          $('.form-group').find('input, textarea').on('keyup blur focus', function(e){
              
              // Cache our selectors
              var $this = $(this),
                  $parent = $this.parent().find("label");

              if (e.type == 'keyup') {
                  if( $this.val() == '' ) {
                      $parent.addClass('js-hide-label'); 
                  } else {
                      $parent.removeClass('js-hide-label');   
                  }                     
              } 
              else if (e.type == 'blur') {
                  if( $this.val() == '' ) {
                      $parent.addClass('js-hide-label');
                  } 
                  else {
                      $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                  }
              } 
              else if (e.type == 'focus') {
                  if( $this.val() !== '' ) {
                      $parent.removeClass('js-unhighlight-label');
                  }
              }
          });
      } 
  });
  

  $(document).ready(function() {
    $("#contactForm").validate({
      ignore: ".ignore",
      rules: {
        message: "required",

        name: {
          required: true,
          minlength: 2,
          pattern: /^[a-zA-Z ']+(-[a-zA-Z ']+)*$/
        },
    
        email: {
          required: true,
          email: true,
          pattern: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/
        },

        subject: {  
            required: true,
            minlength: 2,
            maxlength: 2500
          },
        hiddenRecaptcha: {
          required: function () {
            if (grecaptcha.getResponse() == '') {
              return true;
            } else {
              return false;
            }
          }
        }
      },
      messages: {
        name: {
          required: "Please enter your name.",
          minlength: "Your name must consist of at least 2 characters.",
          pattern: "Enter a valid name!"
        },
        subject: {
          required: "Please enter your subject."
        },
        email: "Please enter a valid email address.",
        message: "Please enter your message.",
        hiddenRecaptcha: "Please check the captcha box to proceed.",
      },
      submitHandler: function(form) {
        form.submit();
        // $('#SubForm').click(function() {
        // });
      }
    });
  });

