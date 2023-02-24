
-- https://www.hackerrank.com/challenges/sql-projects/problem?isFullScreen=true


SELECT start_date, MIN(end_date)
FROM(
    SELECT start_date
    FROM projects
    WHERE start_date NOT IN(
        SELECT end_date
        FROM projects)
    ) AS a,
    (SELECT end_date
    FROM projects
    WHERE end_date NOT IN(
        SELECT start_date
        FROM projects)
    ) AS b
WHERE start_date < end_date
GROUP BY start_date
ORDER BY DATEDIFF(MIN(end_date),start_date), start_date;