$(function () {

    $("form[name='subscribe-form']").each(function () {  
        $(this).submit(function(e) {
        e.preventDefault();
        }).validate({
        rules: {
          email: {
            required: true,
            email: true
           }
        },
        messages: {
          email: ""
        },

        submitHandler: function(form) { 
             $.ajax({
                type: 'post',
                url: 'subscribe.php',
                data: $(form).serialize(),
                success: function (data) {            
                    document.getElementById("modal-message").innerHTML=data;
                    document.getElementById("modal-link").innerHTML="";
                    $('#modal-box').addClass('show-modal');
                },
                error: function (data) {
                    document.getElementById("modal-message").innerHTML="Памылка пры адпраўцы данных. Калі ласка, праверце данные і паспрабуйце яшчэ раз.";
                    $('#modal-box').addClass('show-modal');
                }
            });
            return false;
        }
        });
    });
  
    $('.form-send-event').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'send.php',
            data: $(this).serialize(),
            success: function () {
                document.getElementById("modal-message").innerHTML="Дзякуй за вашую ідэю!";
                document.getElementById("modal-link").innerHTML="Падаць яшчэ адну ідэю";
                $('#modal-box').addClass('show-modal');
            },
            error: function () {
                document.getElementById("modal-message").innerHTML="Памылка пры адпраўцы данных. Калі ласка, праверце данные і паспрабуйце яшчэ раз.";
                $('#modal-box').addClass('show-modal');
            }
        });
    });
    
    $('.form-send-help').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'send.php',
            data: $(this).serialize(),
            success: function () {
                document.getElementById("modal-message").innerHTML="Дзякуй за вашую прапанову дапамогі!";
                document.getElementById("modal-link").innerHTML="Прапанаваць яшчэ дапамогу";
                $('#modal-box').addClass('show-modal');
            },
            error: function () {
                document.getElementById("modal-message").innerHTML="Памылка пры адпраўцы данных. Калі ласка, праверце данные і паспрабуйце яшчэ раз.";
                $('#modal-box').addClass('show-modal');
            }
        });
    });
});



$(window).scroll(function(){
   var scroll = $(window).scrollTop();

   if (scroll > 0 ) {
       $('.fixed-top').addClass('scrolled');
   }

    if (scroll <= 0 ) {
      $('.fixed-top').removeClass('scrolled');
    }
});

$(document).ready(function(){
$('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 80
        }, 500);
        return false;
      }
    }
  });
});
