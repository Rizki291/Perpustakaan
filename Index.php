<?php 
	 include 'Page/Config/Connection.php';
	 $query = mysqli_query($con, "select * from book_tb");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>Tain Tele</h2>
	<ul class="menu">
		<li>Menu1</li>
		<li>Menu2</li>
	</ul>
	<?php 
		while ($data = mysqli_fetch_array($query)){
	?>
		<div class="card">
			<div class="img">
				<img src="">
			</div>
			<p align="center"><a href="#"><?php echo $data['name'] ?></a></p>
			<p align="center"><?php echo $data['Publication_year'] ?></p>
		</div>
	<?php
		}
	?>
	
</body>
</html>