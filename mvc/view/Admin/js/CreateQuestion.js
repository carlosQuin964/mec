$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/controllerQuestion.php", 
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("Question created!", "you think the Question successfully it can visulaizar in seeing tests", "success");
	})
	.fail(function(){
		sweetAlert("Oops...", "create  Question!", "error");
	})
	.always(function(){
		
	});

});
});