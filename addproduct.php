<?php
require_once "pdo.php"; 

session_start();

  $sql = "INSERT INTO products (SKU, name, price, type)
              VALUES (:SKU, :name, :price, :type)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':SKU' => $_POST['SKU'],
        ':name' => $_POST['name'],
        ':price' => $_POST['price']));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: product_list.php' ) ;
    return;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Add</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
	<header>
		<h1>Product Add</h1>
		<p><input type="submit"  value="Save"/>
<a href="product_list.php">Cancel</a></p>
		
	</header>
	<form method="POST">
  <label for="sku">SKU:</label><br>
  <input type="text" id="sku" name="sku"><br>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="price"> Price($): </label><br>
  <input type="price" id="price" name="price"></input><br>
  <label for="type"> Type switcher: </label><br>
  <select name="type" id="type" form="type">
  	<option value="book"> Book</option>
  	<option value="dvd">DVD</option>
  	<option value="furniture">Furniture</option>	
  </select>

</form>

</body>
</html>