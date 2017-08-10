$(function() {

  $("form[name='subscribe-form']").validate({
    errorPlacement: function(error, element) {

    },
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

  $("form[name='events-form']").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
       message: "required"
    },
    messages: {
      name: "",
      message: "",
      email: ""
    },
    submitHandler: function(form) {
      form.submit();
    }
  });

  $("form[name='help-us-form']").validate({
    rules: {
      name: "required",
      email: {
        required: true,        
        email: true
      },
       message: "required"
    },
    messages: {
      name: "",
      message: "",
      email: ""
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
