CREATE TABLE [dbo].[stock] (
   id INT IDENTITY PRIMARY KEY,
   asset NVARCHAR(50) NULL,
   serial_number NVARCHAR(50) NULL,
   model NVARCHAR(100) NULL,
   brand NVARCHAR(50) NULL,
   spec NVARCHAR(max) NULL,
   invoice NVARCHAR(50) NULL,
   price FLOAT NULL,
   guarantee NVARCHAR(50) NULL,
   end_guarantee NVARCHAR(50) NULL,
   stat NVARCHAR(50) 
      CHECK (stat IN ('1', '2')) 
      DEFAULT '1' NULL
);