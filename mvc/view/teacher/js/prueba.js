$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/controllerMatters.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		swal({   title: "Sweet!",   text: "the subject is I think successfully already can display it in view subject",   imageUrl: "img/lectura.jpg" });
	})
	.fail(function(){
		sweetAlert("Oops...", "create  subject!", "error");
	})
	.always(function(){
		
	});

});
});