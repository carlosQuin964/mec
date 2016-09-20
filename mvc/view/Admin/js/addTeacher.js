$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerAddTeacher.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal("Teacher created!", "you create Teacher successfully it can visulaizar in all users", "success");
	})
	.fail(function(){
		sweetAlert("Oops...", "create  subject!", "error");
	})
	.always(function(){
		
	});

});
});