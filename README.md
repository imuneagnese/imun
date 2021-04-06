# imun
web page
<?php
require_once "pdo.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product list</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
	<header>
		<h1>Product list</h1>
		<nav>
			<a href="addproduct.html">ADD</a>
			<a href="massdeleted.html">MASS DELETED</a>
		</nav>
		<hr>
	</header>
	<table>
		<tr><th class="name"> Acme DISC</th>
			<td id="sku">JVC200123</td>
			<td class="price">100 $</td>
			<td class="size">size700 MB</td>
		</tr>
		<tr><th> Acme DISC</th>
			<td>SKU</td>
			<td>price</td>
			<td>size700 MB</td>
		</tr>
		<tr><th> Acme DISC</th>
			<td>SKU</td>
			<td>price</td>
			<td>size700 MB</td>
		</tr>
		<tr><th> Acme DISC</th>
			<td>SKU</td>
			<td>price</td>
			<td>size700 MB</td>
		</tr>


	
	</table>



</body>
<footer>
	<h4>Scandiweb Test assigment</h4>
</footer>
</html>
