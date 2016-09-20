$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerExam.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("Exam   created successfully!", "This Exam is created successfully", "success");
		 
	})
	.fail(function(){
		sweetAlert("Oops...", "create  Exam!", "error");
	})

	.always(function(){
		
	});

});
});
