$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/controllerPerCourse.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("registration correctly the course!", "your you've successfully registered to the course not forget to pay for the course and the activities as the test", "success");
		setTimeout("location.href='Ehome.php'", 5000);
	})
	.fail(function(){
		sweetAlert("Oops...", "create  registration!", "error");
	})

	.always(function(){
		
	});

});
});