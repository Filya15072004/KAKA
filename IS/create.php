<?php $connect = mysqli_connect('127.0.0.1', 'root' , '' , 'dany_ch_15');
 
$query = mysqli_query($connect, "INSERT INTO ps4 (name, img, price) VALUES ('". $_POST['name'] . ", 'images/'" . $_FILES['img']['name'] . "','". $_POST['price'] . "')");

?>