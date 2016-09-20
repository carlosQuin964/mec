$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/serviceCourse.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("course created correctly!", "This course is created successfully", "success");
		//setTimeout("location.href='viewCourses.php'", 5000); 
	})
	.fail(function(){
		sweetAlert("Oops...", "create  registration!", "error");
	})

	.always(function(){
		
	});

});
});
