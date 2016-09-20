$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../Controller/controllerUp.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("Test created!", "you think the test successfully it can visulaizar in seeing tests", "success");
	})
	.fail(function(){
		sweetAlert("Oops...", "create  subject!", "error");
	})
	.always(function(){
		
	});

});
});