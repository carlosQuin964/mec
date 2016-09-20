
$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerCourSubj.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("the Subject was correctly added to the course!", "the Subject was correctly added to the course now you can continue to add more materials to courses", "success");
		 
	})
	.fail(function(){
		sweetAlert("Oops...", "create  Exam!", "error");
	})

	.always(function(){
		
	});

});
});
