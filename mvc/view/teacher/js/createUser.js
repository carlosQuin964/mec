$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "mvc/Controller/services.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("registration successful!", "you are has registered correctly already you can enter with your email and your password good luck", "success");
		setTimeout("location.href='login.php'", 5000);
	})
	.fail(function(){
		sweetAlert("Oops...", "create  registration!", "error");
	})

	.always(function(){
		
	});

});
});