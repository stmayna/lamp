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
/*
    public function insert() {
        $sql = "INSERT INTO invoices (
                      InvoiceNo,
                      StockCode,
                      Description,
                      Quantity,
                      InvoiceDate,
                      UnitPrice,
                      CustomerID,
                      Country
                  )
                  VALUES (
                      '777779',
                      '88890',
                      'This is the description 3',
                      5,
                      '2014-02-12 08:35:00',
                      4.25,
                      '13046',
                      'United Kingdom'
                  )";

        return $this->pdo->exec($sql);
    } */

    function insertSingleRow($InvoiceNo,$StockCode,$Description,$Quantity,$InvoiceDate,$UnitPrice,$CustomerID,$Country) {
        
        $InvoiceNo =  $_REQUEST['InvoiceNo'];
        $StockCode = $_REQUEST['StockCode'];
        $Description =  $_REQUEST['Description'];
        $Quantity = $_REQUEST['Quantity'];
        $InvoiceDate = $_REQUEST['InvoiceDate'];
        $UnitPrice = $_REQUEST['UnitPrice'];
        $CustomerID = $_REQUEST['CustomerID'];
        $Country = $_REQUEST['Country'];
        
        $task = array(':InvoiceNo' => $InvoiceNo,
                    ':StockCode' => $StockCode,
                    ':Description' => $Description,
                    ':Quantity' => $Quantity,
                    ':InvoiceDate' => $InvoiceDate,
                    ':UnitPrice' => $UnitPrice,
                    ':CustomerID' => $CustomerID,
                    ':Country' => $Country);

		$sql = 'INSERT INTO invoices(InvoiceNo,StockCode,Description,Quantity,InvoiceDate,UnitPrice,CustomerID,Country)
				VALUES(:InvoiceNo,:StockCode,:Description,:Quantity,:InvoiceDate,:UnitPrice,:CustomerID,:Country)';

		$q = $this->pdo->prepare($sql);

		return $q->execute($task);
	}

    public function __destruct() {
		$this->pdo = null;
	}

}
/*
$obj = new InsertData();

if ($obj->insertSingleRow('777780','88891','This is the description 4',5,'2014-02-13 08:35:00',4.25,'13046','United Kingdom') !==false)
    echo "A new data has been added into invoices";
else
    echo "Error adding new data";
*/