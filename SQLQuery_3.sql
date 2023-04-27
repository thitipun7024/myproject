SELECT COUNT(region) AS regiontotal_3
FROM MasterControlAddress 
GROUP BY region
HAVING region = N'ภาคธุรกิจที่ 3'

SELECT COUNT(region) AS regiontotal_4
FROM MasterControlAddress 
GROUP BY region
HAVING region = N'ภาคธุรกิจที่ 4'

SELECT 

SELECT area FROM countries ORDER BY area DESC
