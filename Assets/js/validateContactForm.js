$(document).ready(function () {
    $(window).load(function () {
        setTimeout('hideStatus()',5000);
    });
});
  function hideStatus() {
      $("#form_status").addClass('fade');
  }

  function validateForm() {

        var success = 1;

        var inputs = $("form").find("input");


        //email validation

        var pattern_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var email = inputs.filter("#email").val();

        if(!pattern_email.test(email) && email == ''){
            inputs.filter("#email").css('background-color','maroon').attr('placeholder','Provide a correct Email')
                .animate({width: '+=10px',height:'+=10px'})
                .animate({width: '-=10px',height:'-=10px'});
            document.contact.email.focus();
            success = 0;
        }else {
            inputs.filter("#email").css('background-color','white');
        }


      //name validation
      var pattern_name = /([^0-9])/;

      var name = inputs.filter("#name").val();

      if(name == ''){
          inputs.filter("#name").css('background-color','maroon').attr('placeholder','Can not be empty!!!')
              .animate({width: '+=10px',height:'+=10px'})
              .animate({width: '-=10px',height:'-=10px'});

      }else{
          if(!pattern_name.test(name)){
              inputs.filter("#name").css('background-color','maroon').attr('placeholder','Numbers and Characters are not allowed')
                  .animate({width: '+=10px',height:'+=10px'})
                  .animate({width: '-=10px',height:'-=10px'});
              document.contact.name.focus();
              success = 0;
          }else{
              inputs.filter("#name").css('background-color','white');
          }
      }

      //Message Restrictions

      var message = $("form").find('textarea').val();
      if(message.length <100) {
          $("form").find('textarea').css('background-color','maroon').attr('placeholder', 'Minimum 100 Characters Required')
              .animate({width: '+=10px',height:'+=10px'})
              .animate({width: '-=10px',height:'-=10px'});
          success = 0;
      }else{
          $("form").find('textarea').css('background-color','white')
      }


      if(success == 1){
          return true;
      }
      else {
          return (false);
      }


  }
