<?php

class InsertData {

    const DB_HOST = 'localhost';
    const DB_NAME = 'ship_ports';
    const DB_USER = 'root';
    const DB_PASSWORD = 'password';

    private $pdo = null;

    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        // what's %s for? don't you curious?
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $pe) {
            die($pe->getMessage());
        }
    }
//...

   /**
     * Insert a row into a table
     * @return
     */
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
                      /* I want it to automatically insert the current date and time*/
                      '2014-02-12 08:35:00',
                      4.25,
                      '13046',
                      'United Kingdom'
                  )";

        return $this->pdo->exec($sql);
    }