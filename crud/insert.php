<?php

class InsertData {

    const DB_HOST = 'localhost';
    const DB_NAME = 'ship_ports';
    const DB_USER = 'root';
    const DB_PASSWORD = 'password';

    private $pdo = null;

    public function __construct() {
        $conStr = sprintf("mysql:host=%s;dbname=%s", InsertData::DB_HOST, InsertData::DB_NAME);
        // what's %s for? don't you curious?
        try {
            $this->pdo = new PDO($conStr, InsertData::DB_USER, InsertData::DB_PASSWORD);
        } catch (PDOException $pe) {
            die($pe->getMessage());
        }
    }
    
    function insertSingleRow($InvoiceNo,$StockCode,$Description,$Quantity,$InvoiceDate,$UnitPrice,$CustomerID,$Country) {

        $task = array(':InvoiceNo' => $InvoiceNo,
                    ':StockCode' => $StockCode,
                    ':Description' => $Description,
                    ':Quantity' => $Quantity,
                    ':InvoiceDate' => $InvoiceDate,
                    ':UnitPrice' => $UnitPrice,
                    ':CustomerID' => $CustomerID,
                    ':Country' => $Country);

		$sql = 'INSERT INTO invoices(InvoiceNo,StockCode,Description,Quantity,InvoiceDate,UnitPrice,CustomerID,Country)
				VALUES(:InvoiceNo,:StockCode,:Description,:Quantity, :InvoiceDate, :UnitPrice, :CustomerID, :Country)';

		$q = $this->pdo->prepare($sql);

		return $q->execute($task);
	}

    public function __destruct() {
		$this->pdo = null;
	}

}

$obj = new InsertData();
$InvoiceNo =  $_POST['InvoiceNo'];
$StockCode = $_POST['StockCode'];
$Description =  $_POST['Description'];
$Quantity = $_POST['Quantity'];
$InvoiceDate = $_POST['InvoiceDate'];
$UnitPrice = $_POST['UnitPrice'];
$CustomerID = $_POST['CustomerID'];
$Country = $_POST['Country'];

$obj->insertSingleRow($InvoiceNo,$StockCode,$Description,$Quantity,$InvoiceDate,$UnitPrice,$CustomerID,$Country);

header("Location:index.php");
