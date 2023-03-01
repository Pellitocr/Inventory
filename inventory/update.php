<?php
include 'dbconnect.php';

	if (count($_POST) > 0) {
	
	mysqli_query($db,"UPDATE content set itemNUM='" . $_POST['itemNUM'] . "', UPC='" . $_POST['UPC'] . "', Description='" . $_POST['Description'] . "', Department='" . $_POST['Department'] . "', Quantity='" . $_POST['Quantity'] . "', Last_Edited='" . $_POST['Last_Edited'] . "', Buying_Price='" . $_POST['Buying_Price'] . "', Selling_Price='" . $_POST['Selling_Price'] . "', Supplier_Name='" . $_POST['Supplier_Name'] . "' WHERE itemNUM='" . $_POST['itemNUM'] . "'");
	
	echo '<script>alert("Item Modified Successfully!");</script>';
		// Prompts the user_error
	echo '<script>window.location.assign("design.php");</script>';
	
	}
	
	$result = mysqli_query($db,"SELECT * FROM content WHERE itemNUM='" . $_GET['itemNUM'] . "'");
	$row=mysqli_fetch_array($result);
	?>
	
<html>
	<head>
		<title> Update Inventory </title>
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
	
<body class="add_form">

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

	<h2 class="add_data_header">Update Data</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="form">
	
		<!--FIRST HALF OF FORM, CLASS NAME = 'form_1'-->		
	<form name="frmUser" method="post" action="" autocomplete="off">
	<div class="form_1">
	<h3 class="form_labels">Item Number:</h3>
		<input type="hidden" name="itemNUM" class="txtField" value="<?php echo $row['itemNUM']; ?>">
		<input type="text" name="itemNUM" value="<?php echo $row['itemNUM']; ?>" readonly> <br/><br/>
	
	<h3 class="form_labels">UPC:</h3>
		<input type="text" name="UPC" class="txtField" value="<?php echo $row['UPC']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Description:</h3>
		<input type="text" name="Description" class="txtField" value="<?php echo $row['Description']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Department:</h3>
		<input type="text" name="Department" class="txtField" value="<?php echo $row['Department']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Quantity:</h3>
		<input type="text" name="Quantity" class="txtField" value="<?php echo $row['Quantity']; ?>"> <br/><br/>
		</div>
		
	<h3 class="form_labels">Buying Price:</h3>
		<input type="text" name="Buying_Price" class="txtField" value="<?php echo $row['Buying_Price']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Selling Price:</h3>
		<input type="text" name="Selling_Price" class="txtField" value="<?php echo $row['Selling_Price']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Supplier:</h3>
    <select name="Supplier_Name" required class="txtField" value="<?php echo $row['Supplier_Name']; ?>">
            <option><?php echo $row['Supplier_Name']; ?></option>
            <option>The Coca Cola Co.</option>
            <option>Pepsi Co.</option>
            <option>B. Fernandez & hnos. inc.</option>
            <option>V. Suarez & Corp</option>
            <option>Ballester hnos. inc.</option>
            <option>PUERTO RICO SUPPLIES CO INC</option>
        </select>
		<br/><br/>
		
		<h3 class="form_labels">Last Edited:</h3>
		<input type="text" name="Last_Edited" class="txtField" value="<?php echo $row['Last_Edited']; ?>"> <br/><br/>
	
	
	<input type="submit" name="submit" value="Submit" class="buttom">
	
	</form>
	
</body>
</html>