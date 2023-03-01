<!DOCTYPE html>

<head>
	<title>Add Data</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">	
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
<br>

	<h2 class="add_data_header">Add Data</h2>
	<br>
	<hr class="break">
	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="form">
	
		<!--FIRST HALF OF FORM, CLASS NAME = 'form_1'-->
	<form action="insert.php" method="post" autocomplete="off">
	<div class="form_1">
		<h3 class="form_labels">UPC:</h3>
		<input type="text" name="UPC" required>
		<h3 class="form_labels">Description:</h3>
		<input type="text" name="Description" required>
		<h3 class="form_labels">Department:</h3>
		<input type="text" name="Department" required>
		<h3 class="form_labels">Quantity:</h3>
		<input type="text" name="Quantity" required>
		</div>
	
<!--SECOND HALF OF FORM, CLASS NAME = 'form_2'-->
		<div class="form_2">
		<h3 class="form_labels">Buying Price:</h3>
		<input type="text" name="Buying_Price" required>
		<h3 class="form_labels">Selling Price:</h3>
		<input type="text" name="Selling_Price" required>
		<h3 class="form_labels">Supplier Name:</h3>

        <select name="Supplier_Name" required>
            <option>--Supplier--</option>
            <option>The Coca Cola Co.</option>
            <option>Pepsi Co.</option>
            <option>B. Fernandez & hnos. inc.</option>
            <option>V. Suarez & Corp</option>
            <option>Ballester hnos. inc.</option>
            <option>PUERTO RICO SUPPLIES CO INC</option>
        </select>
        <br/><br/>
		
		<h3 class="form_labels">Last Edited:</h3>
		<input type="text" name="Last_Edited" placeholder="YYYY-DD-MM" required> 
<br>
<br>
<br>
		<!--SUBMIT BUTTON-->
		  <button class="submit" type="submit" name="save">SUBMIT</button>
		
		</div>
		<br>
		<br>
	</form>
</div>
</body>
</html>		