<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Retail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<br/>
	<h3>Add New Item</h3>
	<br/>
	<div class="row">
	<div class="col-lg-6">
	<form action="insert.php" method="POST">
		
		<div class="form-group">
		<label>Invoice Number</label>
		<input type="text" value="" class="form-control" name="InvoiceNo">
		</div>

		<div class="form-group">
		<label>Stock Code</label>
		<input type="text" value="" class="form-control" name="StockCode">
		</div>

		<div class="form-group">
		<label>Description</label>
		<input type="text" value="" class="form-control" name="Description">
		</div>

		<div class="form-group">
		<label>Quantity</label>
		<input type="text" value="" class="form-control" name="Quantity">
		</div>

		<div class="form-group">
		<label>Invoice Date</label>
		<input type="text" value="" class="form-control" name="InvoiceDate">
		</div>

		<div class="form-group">
		<label>Unit Price</label>
		<input type="text" value="" class="form-control" name="UnitPrice">
		</div>

		<div class="form-group">
		<label>Customer ID</label>
		<input type="text" value="" class="form-control" name="CustomerID">
		</div>

		<div class="form-group">
		<label>Country</label>
		<input type="text" value="" class="form-control" name="Country">
		</div>

		<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"></i> Add</button>

	</form>
	</div>
	</div>
	</div>
</body>
</html>