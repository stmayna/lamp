-- Inserting data

INSERT INTO invoices (InvoiceNo, StockCode, Description, Quantity, InvoiceDate, UnitPrice, CustomerID, Country)
VALUES ('777778','88889','This is the description 2',5,'2014-02-12 08:35:00', 4.25, '13046', 'United Kingdom');

-- Checking the inserted data
SELECT * FROM invoices ORDER BY InvoiceDate DESC LIMIT 1;

-- Result: This data inserted into the last row

