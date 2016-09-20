


function eliminar(idObjepto){

conf=confirm('sure delete exam '+idObjepto+'');
		if (conf==true) {
			$.ajax({
				url: "../Controller/ControllerExam.php", 
				type: "POST",
				datatype: "json",
				data:{
					"deleteExam":"ok",
					"idexamen":idObjepto
				},
				success:function(rta){
					swal("is to removed the Exam! "+idObjepto+"", "you to eliminated the Exam!"+idObjepto+"", "success");
					$('#fila-'+idObjepto).remove();
				},
				error:function(rta){
					alert("error");
				}
			});
		}else{
			sweetAlert("Oops...", "the Exam is not deleted! "+idObjepto+"", "error");
		}
		
		}


