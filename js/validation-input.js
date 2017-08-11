$(function() {
  $("form[name='subscribe-form']").each(function () {
  $(this).validate({
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
      form.submit();
    }
  });
  });
});

$(function () {
    $('.form-send').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'send.php',
            data: $(this).serialize(),
            success: function () {
                document.getElementById("modal-message").innerHTML="Дзякуй за ваша паведамленне!";
                $('#modal-box').show();
            },
            error: function () {
                document.getElementById("modal-message").innerHTML="Памылка пры адпраўцы данных. Калі ласка, праверце данные і паспрабуйце яшчэ раз.";
                $('#modal-box').show();
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

  // Smooth scrolling to any internal tags
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
