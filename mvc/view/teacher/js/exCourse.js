$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerExmCourse.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("consideration added to the course!", "This Exam is added to the course", "success");
		 
	})
	.fail(function(){
		sweetAlert("Oops...", "create  Exam!", "error");
	})

	.always(function(){
		
	});

});
});
