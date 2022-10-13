<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Retail</title>
</head>
<body>
	<left>
		<h1>Invoice Database</h1>
		<form action="insert.php" method="post">
			
        <p>
			<label for="InvoiceNo">Invoice Number:</label>
			<input type="text" name="InvoiceNo" id="InvoiceNo">
        </p>
		
        <p>
			<label for="StockCode">Stock Code:</label>
			<input type="text" name="StockCode" id="StockCode">
        </p>
	
        <p>
			<label for="Description">Description:</label>
			<input type="text" name="Description" id="Description">
        </p>
			
        <p>
			<label for="Quantity">Quantity:</label>
			<input type="text" name="Quantity" id="Quantity">
        </p>

        <p>
			<label for="InvoiceDate">Invoice Date:</label>
			<input type="text" name="InvoiceDate" id="InvoiceDate">
        </p>

        <p>
			<label for="UnitPrice">Unit Price:</label>
			<input type="text" name="UnitPrice" id="UnitPrice">
        </p>

        <p>
			<label for="CustomerID">Customer ID:</label>
			<input type="text" name="CustomerID" id="CustomerID">
        </p>
			
        <p>
			<label for="Country">Country:</label>
			<input type="text" name="Country" id="Country">
        </p>

			<input type="submit" value="Submit">
		</form>
    </left>
</body>
</html>
