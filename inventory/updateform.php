<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	$result = mysqli_query ($db, "SELECT * FROM content");
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Update Data</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		
		<style>
			tr:hover {
				background-color: #1a1a1a;
				color: white;
				text-shadow: 2px 2px 4px #000000;
				border: 1px solid white;
			}
		</style>
		
	</head>

<body>
<!--- Nav bar --->
<header>
		<img class="logo" src="texacoLogo.png" alt="Texaco Logo" />
		<nav>
			<ul class="inventory_links">
		<li><a href = "design.php" >Inventory</a></li>
		<li><a href = "updateform.php" >Update Items</a></li>
		<li><a href = "addform.php" >Add Items</a></li>
		<li><a href = "Suppliers.html" >Suppliers</a></li>
		<li><a href = "Manual.pdf">Help</a></li>
		</nav>
	</header>
<br>
	<br>
	<h1 class="update_data"> Update Data </h1>
	<br>
	<br>
	
<?php	
	if (mysqli_num_rows($result) > 0) {	
?>

<table border = "1"> 
	<tr>
		<th> Item Number </th>
		<th> UPC </th>
		<th> Description </th>
		<th> Department </th>
		<th> Quantity </th>
		<th> Buying Price </th>
		<th> Selling Price </th>
		<th> Supplier Name </th>
		<th> Last Edited </th>
		
		<th> Update </th>
		
	</tr>

<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
?>
	<tr>	
		<td><?php echo $row["itemNUM"]; ?></td>
		<td><?php echo $row["UPC"]; ?></td>
		<td><?php echo $row["Description"]; ?></td>
		<td><?php echo $row["Department"]; ?></td>
		<td><?php echo $row["Quantity"]; ?></td>
		<td><?php echo $row["Buying_Price"]; ?></td>
		<td><?php echo $row["Selling_Price"]; ?></td>
		<td><?php echo $row["Supplier_Name"]; ?></td>
		<td><?php echo $row["Last_Edited"]; ?></td>


		<td><a class="colorsito" href="update.php?itemNUM=<?php echo $row["itemNUM"]; ?>">Update</a></td>
	</tr>	
<?php
	$i++;
	}
?>
</table>
<?php
	}
	else { 
		echo "No result found";
	}
?>

</body>
</html>

	
		
		
		
		
		
		
		
		