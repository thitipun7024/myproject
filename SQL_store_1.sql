SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
--StoredProcedure
CREATE PROC [dbo].[sp_callmeplease] @monkey NVARCHAR(100) , @water NVARCHAR(255)
    AS
        BEGIN
            Select 
                * 
                    from [IT].dbo.MasterControlAddress as M
                    inner join [IT].dbo.countries as S ON M.brn = S.countryid
                    where M.brn = @monkey and s.countryid = @water
        End;
GO

