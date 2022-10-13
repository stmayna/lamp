<?php
        $pdo = new PDO('mysql:host=localhost;dbname=ship_ports', 'root', 'password');

        /*$sql = 'SELECT * FROM invoices Orders LIMIT 100';*/
        $sql = 'SELECT * FROM invoices ORDER BY InvoiceDate DESC LIMIT 30';

        $q = $pdo->query($sql);

        $q->setFetchMode(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <table border="1">
	        <thead>
		    <tr>
                <th>Invoice Number</th>
                <th>Stock Code</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Invoice Date</th>
                <th>Unit Price</th>
                <th>Customer ID</th>
                <th>Country</th>
		    </tr>
	        </thead>
	    <tbody>
        <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['InvoiceNo']) ?></td>
                            <td><?php echo htmlspecialchars($row['StockCode']); ?></td>
                            <td><?php echo htmlspecialchars($row['Description']); ?></td>
                            <td><?php echo htmlspecialchars($row['Quantity']) ?></td>
                            <td><?php echo htmlspecialchars($row['InvoiceDate']); ?></td>
                            <td><?php echo htmlspecialchars($row['UnitPrice']); ?></td>
                            <td><?php echo htmlspecialchars($row['CustomerID']); ?></td>
                            <td><?php echo htmlspecialchars($row['Country']); ?></td>
                        </tr>
        <?php endwhile; ?>
	    </tbody>
        </table>        
    </body>
</html>