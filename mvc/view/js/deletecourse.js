

function eliminar(idObjepto){

conf=confirm('sure delete course '+idObjepto+'');
		if (conf==true) {
			$.ajax({
				url: "../Controller/serviceCourse.php",
				type: "POST",
				datatype: "json",
				data:{
					"deleteCourse":"ok",
					"idcurso":idObjepto
				},
				success:function(rta){
					swal("is to removed the course! "+idObjepto+"", "you to eliminated the course!"+idObjepto+"", "success");
					$('#fila-'+idObjepto).remove();
				},
				error:function(rta){
					alert("error");
				}
			});
		}else{
			sweetAlert("Oops...", "the course is not deleted! "+idObjepto+"", "error");
		}
		
		}




