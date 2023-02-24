-- https://www.hackerrank.com/challenges/placements/problem?isFullScreen=true

SELECT S.Name FROM Students S 
JOIN Friends F ON S.ID=F.ID 
JOIN Packages P ON S.ID=P.ID
WHERE P.Salary < (SELECT Salary From Packages WHERE F.Friend_id=ID)
ORDER BY (SELECT Salary From Packages WHERE F.Friend_id=ID);