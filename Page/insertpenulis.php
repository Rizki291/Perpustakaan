<?php
	include "config/connection.php";
	if(isset($_POST['sbmt'])){
		echo $_POST['id'];
		$query = mysqli_query($con, "insert into writer_tb values('".$_POST['id']."','".$_POST['nama']."')");
		if($query){
			echo "<script>alert('berhasil input')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="insertpenulis.php">
		<input type="text" name="id" placeholder="Id Penulis"><br>
		<input type="text" name="nama" placeholder="Nama Penulis"><br>
		<input type="submit" name="sbmt"><br>
		<input type="reset" name="reset">
	</form>
</body>
</html>