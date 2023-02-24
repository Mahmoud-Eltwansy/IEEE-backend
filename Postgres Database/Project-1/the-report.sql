-- https://www.hackerrank.com/challenges/the-report/problem?isFullScreen=true

SELECT CASE WHEN Grade <8 THEN NULL ELSE Name END
,Grade, Marks FROM Students S JOIN Grades G
ON S.Marks >=G.Min_Mark AND S.Marks <=G.Max_Mark ORDER BY Grade DESC,Name,Marks;