<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root' , '' , 'dany_ch_15'); ?> 

 <form action="create.php" method="POST" enctype="multipart/form-data">
 	<input type="" name="name">
 	<input type="file" name="img">
 	<input placeholder="Цена" type="" name="price">
 	<button class="btn bg-success mr-5">ДОБАВИТЬ</button>
 </form>



 <?php $query = mysqli_query($connect, "SELECT * FROM ps4") ?>

<?php for ($i=0; $i < $query->num_rows ; $i++) { ?>

	<?php $res = $query->fetch_assoc();
		
		  ?>
		<h5><?php echo $res['name']; ?></h5>
		<p><?php echo $res['price'];?></p>
		<?php echo '<img src="'. $res['img'] .'">' ?>

<form action="del.php" method="POST">
 	<?php echo '<input type="hidden" name="id" class="mt-5" value="' . $res['id'] . '">' ?>
 <button class="btn bg-danger">УДАЛИТЬ</button>
 </form>

<?php } ?>

</body>
</html>
