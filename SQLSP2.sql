SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--StoredProcedure
ALTER PROC [dbo].[storetest] @id FLOAT,
@country NVARCHAR(255),
@area FLOAT,
@area_sq_mi FLOAT,
@total FLOAT,
@note NVARCHAR(MAX),
@countryid NVARCHAR(255)
    AS
        BEGIN
            INSERT INTO [IT].[dbo].[countries] (id, country, area, [area(sq_mi)], total, note, countryid) 
            VALUES ('@id','@country', '@area', '@area_sq_mi', '@total', '@note', '@countryid')
        End;
GO

EXECUTE [dbo].[Storetest]
@id = N'264',
@country = N'1',
@area = N'1',
@area_sq_mi = N'1',
@total = N'0.1',
@note = N'1',
@countryid = N'1'
GO