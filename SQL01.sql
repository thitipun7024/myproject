SELECT TOP (1000000) [id]
      ,[brn]
      ,[bnname]
      ,[address]
      ,[postcode]
      ,[mobile]
      ,[internal]
      ,[Latitude]
      ,[Longitude]
      ,[region]
      ,[district]
      ,[headbranch]
      ,[area]
  FROM [IT].[dbo].[MasterControlAddress] 

SELECT id,brn,bnname,mobile,region,internal
FROM MasterControlAddress
WHERE region 
IN (N'ภาคธุรกิจที่ 3',N'ภาคธุรกิจที่ 4') AND internal IS NULL

SELECT * FROM MasterControlAddress

SELECT MasterControlAddress.region,count(MasterControlAddress.region) AS regiontotal
FROM MasterControlAddress
WHERE region 
IN  (N'ภาคธุรกิจที่ 3',N'ภาคธุรกิจที่ 4') GROUP BY region

SELECT count(MasterControlAddress.region) AS regiontotal
FROM MasterControlAddress
WHERE region 
IN  (N'ภาคธุรกิจที่ 3',N'ภาคธุรกิจที่ 4') GROUP BY region
