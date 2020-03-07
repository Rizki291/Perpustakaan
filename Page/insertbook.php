<?php
	include "config/connection.php";

	if(isset($_POST['sbmt'])){
		$target_dir = "File/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
		$query = mysqli_query($con, "insert into book_tb values('".$_POST['id']."','".$_POST['nama']."','".$_POST['category']."',
			'".$_POST['writer']."','".$_POST['publication']."','".$_FILES['fileToUpload']['name']."')");
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
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
	<form method="post" action="insertbook.php" enctype="multipart/form-data">
		<input type="text" name="id" placeholder="Id Buku"><br>
		<input type="text" name="nama" placeholder="Nama Buku"><br>
		<input type="text" name="category" placeholder="Category Buku"><br>
		<input type="text" name="writer" placeholder="Penulis Buku"><br>
		<input type="text" name="publication" placeholder="publication"><br>
		<input type="file" name="fileToUpload" accept="image/*"><br>
		<input type="submit" name="sbmt"><br>
		<input type="reset" name="reset">
	</form>
</body>
</html>