<?php
session_start();
session_destroy();
echo "cerrar session";
echo '<script> window.location="../../login.php"; </script>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<script language="javascript"> location.href="../../login.php";</script>
	
</body>
</html>