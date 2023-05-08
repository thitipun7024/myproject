SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--StoredProcedure
CREATE PROC [dbo].[storetest] @id NVARCHAR(255),
@country NVARCHAR(255),
@area NVARCHAR(255),
@area_sq_mi NVARCHAR(255),
@total NVARCHAR(255),
@note NVARCHAR(255),
@countryid NVARCHAR(255)
    AS
        BEGIN
            INSERT INTO [IT].[dbo].[countries] (id, country, area, [area(sq_mi)], total, note, countryid) 
            VALUES ('@id','@country', '@area', '@area_sq_mi', '@total', '@note', '@countryid')
        End;
GO
