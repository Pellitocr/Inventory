<?php

include 'dbconnect.php';
if(isset($_POST['save']))
{	 
	 $UPC = $_POST['UPC'];
	 $Description = $_POST['Description'];
	 $Department = $_POST['Department'];
	 $Quantity = $_POST['Quantity'];
	 $Buying_Price = $_POST['Buying_Price'];
	 $Selling_Price = $_POST['Selling_Price'];
	 $Supplier_Name = $_POST['Supplier_Name'];
	 $Last_Edited = $_POST['Last_Edited'];
	 
	 $sql = "INSERT INTO content (UPC,Description,Department,Quantity,Buying_Price,Selling_Price,Supplier_Name,Last_Edited)
		VALUES ('$UPC','$Description','$Department','$Quantity','$Buying_Price','$Selling_Price','$Supplier_Name','$Last_Edited')";
	 
	if (mysqli_query($db,$sql)) {
		mysqli_close($db);
		echo '<script>alert ("New item has been added successfully"); </script>'; // Avisa al usuario 
		
		echo '<script>window.location.assign("design.php");</script>'; // Vuelve al 'Inventory'
	}
		else {
			echo '<script>alert("Error: " . $sql . " " . mysqli_error($db)"); </script>';
			mysqli_close($db);
			echo '<script>window.location.assign("addform.php");</script>';
		}
}
?>