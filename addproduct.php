<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id = "form">
		<form action="insert.php" name="product_form" method ="POST">
			<input type="text" name="product_name" placeholder="Product Name:">
			<input type="text" name = "price" placeholder="Price:">
			<input type="text" name="description" placeholder="description">
			<input type="text" name="image" placeholder="Image">

			<input type="submit" name="product_submit" value="Add">
		</form>
	</div>
</body>
</html>