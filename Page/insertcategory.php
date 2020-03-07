<?php
	include "config/connection.php";
	if(isset($_POST['sbmt'])){
		$query = mysqli_query($con, "insert into category_tb values('".$_POST['id']."','".$_POST['nama']."')");
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
	<form method="post" action="insertcategory.php">
		<input type="text" name="id" placeholder="Id category"><br>
		<input type="text" name="nama" placeholder="Nama category"><br>
		<input type="submit" name="sbmt"><br>
		<input type="reset" name="reset">
	</form>
</body>
</html>