<?php

$pdo = new PDO('mysql:host=localhost;dbname=ship_ports', 'root', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



if (isset($_GET['id'])) {

    $sql = "SELECT * FROM invoices WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($_GET['id']));
    $res = $q->fetch();

    if (!empty($_POST)) {

        $InvoiceNo = $_POST['InvoiceNo'] ?? NULL;
        $StockCode = isset($_POST['StockCode']) ? $_POST['StockCode'] : '';
        $Description = isset($_POST['Description']) ? $_POST['Description'] : '';
        $Quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : '';
        $InvoiceDate = isset($_POST['InvoiceDate']) ? $_POST['InvoiceDate'] : '';
        $UnitPrice = isset($_POST['UnitPrice']) ? $_POST['UnitPrice'] : '';
        $CustomerID = isset($_POST['CustomerID']) ? $_POST['CustomerID'] : '';
        $Country = isset($_POST['Country']) ? $_POST['Country'] : '';

        $sql = $pdo->prepare('UPDATE invoices SET InvoiceNo=?, StockCode=?, Description=?, Quantity=?, InvoiceDate=?, UnitPrice=?, CustomerID=?, Country=? WHERE id=?');
        $sql->execute([$InvoiceNo, $StockCode, $Description, $Quantity, $InvoiceDate, $UnitPrice, $CustomerID, $Country, $_GET['id']]);
        echo '<script>alert("The data was updated successfully");window.location="index.php"</script>';
    }
} else {
    exit('No ID specified!');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Retail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <br />
        <h3>Update Item</h3>
        <br />
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">

                    <div class="form-group">
                        <label>Invoice Number</label>
                        <input type="text" value="<?= $res['InvoiceNo'] ?>" class="form-control" name="InvoiceNo">
                    </div>

                    <div class="form-group">
                        <label>Stock Code</label>
                        <input type="text" value="<?= $res['StockCode'] ?>" class="form-control" name="StockCode">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" value="<?= $res['Description'] ?>" class="form-control" name="Description">
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" value="<?= $res['Quantity'] ?>" class="form-control" name="Quantity">
                    </div>

                    <div class="form-group">
                        <label>Invoice Date</label>
                        <input type="text" value="<?= $res['InvoiceDate'] ?>" class="form-control" name="InvoiceDate">
                    </div>

                    <div class="form-group">
                        <label>Unit Price</label>
                        <input type="text" value="<?= $res['UnitPrice'] ?>" class="form-control" name="UnitPrice">
                    </div>

                    <div class="form-group">
                        <label>Customer ID</label>
                        <input type="text" value="<?= $res['CustomerID'] ?>" class="form-control" name="CustomerID">
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" value="<?= $res['Country'] ?>" class="form-control" name="Country">
                    </div>

                    <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"></i> Update</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>