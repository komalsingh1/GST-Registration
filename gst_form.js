	$(function() {
  $("form[name='gst_form']").validate({
    rules: {
      CN: {
		  required: true,
		  minlength: 5
		  },
      email_id: {
        required: true,
        email: true
      },
    mob:{
        required: true,
		minlength:10,
		maxlength:10
      },
	  GSTIN:{
        required: true,
		minlength:15,
		maxlength:15
      },
	  pan: {
		 required: true,
		minlength:10,
		maxlength:10 
	  }
     },
    messages: {
      CN: "Please enter a valid name",
      email_id: "Please enter a valid email address",
	  mob: "Please enter a valid mobile number, 10 digits",
	  GSTIN:"enter a valid GSTIN number",
	  pan:"Enter a valid pan number"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});