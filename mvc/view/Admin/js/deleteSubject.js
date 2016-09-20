function eliminar(idObjepto){

conf=confirm('sure delete subject '+idObjepto+'');
		if (conf==true) {
			$.ajax({
				url: "../Controller/controllerMatters.php", 
				type: "POST",
				datatype: "json",
				data:{
					"deleteSubject":"ok",
					"idmaterias":idObjepto
				},
				success:function(rta){
					swal("is to removed the subject! "+idObjepto+"", "you to eliminated the subject!"+idObjepto+"", "success");
					$('#fila-'+idObjepto).remove();
				},
				error:function(rta){
					alert("error");
				}
			});
		}else{
			sweetAlert("Oops...", "the subject is not deleted! "+idObjepto+"", "error");
		}
		
		}


