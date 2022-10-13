-- Inserting data

INSERT INTO invoices (InvoiceNo, StockCode, Description, Quantity, InvoiceDate, UnitPrice, CustomerID, Country)
VALUES ('777778','88889','This is the description 2',5,'2014-02-12 08:35:00', 4.25, '13046', 'United Kingdom');

-- Result: This data inserted into the last row
-- based on the material that I read
-- there is no way in inserting the data into the first row specifically
-- but we can cheat while viewing the data, using select
-- well, this data has no key in the very beginning, but it has date column
-- so the newest one must be the last inserted one, the most current date
-- we can ORDER BY it using InvoiceDate column  

-- Checking the inserted data from the last row.
SELECT * FROM invoices ORDER BY InvoiceDate DESC LIMIT 1;

