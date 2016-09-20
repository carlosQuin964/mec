$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerExamQues.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("consideration added to the Exam!", "This Exam is added to the Question", "success");
		 
	})
	.fail(function(){
		sweetAlert("Oops...", "create  Exam!", "error");
	})

	.always(function(){
		
	});

});
});
