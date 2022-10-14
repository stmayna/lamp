<?php
    $pdo = new PDO('mysql:host=localhost;dbname=ship_ports', 'root', 'password');
    $sql = 'SELECT * FROM invoices WHERE deleted=0';
    $q = $pdo->prepare($sql);
    $q->execute();
    $res = $q->fetchAll();
    $a=1;

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
	<div class="row">
	<div class="col-lg-12">
    <br/>    
    <a href="form.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span> Add New Data</a>
    <br/>
        <table class="table table-hover table-bordered" style="margin-top: 10px">
	        <thead>
		    <tr class="success">
                <th>Invoice Number</th>
                <th>Stock Code</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Invoice Date</th>
                <th>Unit Price</th>
                <th>Customer ID</th>
                <th>Country</th>
                <th>ID</th>
                <th style="text-align: center;">Actions</th>
		    </tr>
	        </thead>
	    <tbody>
        <?php foreach ($res as $data) {
        ?>
            <tr>
                <td><?php echo $data['InvoiceNo'] ?></td>
                <td><?php echo $data['StockCode'] ?></td>
                <td><?php echo $data['Description'] ?></td>
                <td><?php echo $data['Quantity'] ?></td>
                <td><?php echo $data['InvoiceDate'] ?></td>
                <td><?php echo $data['UnitPrice'] ?></td>
                <td><?php echo $data['CustomerID'] ?></td>
                <td><?php echo $data['Country'] ?></td>
                <td><?php echo $data['id'] ?></td>
                <td>
                <a href="update.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-md">
					<span class="fa fa-edit"></span></a>
				<a onclick="return confirm('Delete this data?')" href="delete.php?id=<?php echo $data['id'];?>" 
					class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                </td>
            </tr>
        <?php $a++; } ?>
	    </tbody>
        </table>
        </div>
        </div>
        </div>        
    </body>
</html>