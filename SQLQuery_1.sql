SELECT brn,bnname,region 
FROM MasterControlAddress WHERE region IN (N'ภาคธุรกิจที่ 3',N'ภาคธุรกิจที่ 4')
ORDER BY brn ASC;

SELECT COUNT(region) AS regiontotal_3,COUNT(region) AS regiontotal_4
FROM MasterControlAddress 
GROUP BY region
HAVING region = N'ภาคธุรกิจที่ 3' AND region = N'ภาคธุรกิจที่ 4'