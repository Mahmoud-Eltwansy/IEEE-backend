-- https://www.hackerrank.com/challenges/average-population/problem?isFullScreen=true

-- Average Population

SELECT AVG(POPULATION) FROM CITY;


---------------------------------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/revising-aggregations-sum/problem?isFullScreen=true

-- Revising Aggregations - The Sum Function

SELECT SUM(POPULATION) FROM CITY WHERE DISTRICT='California';


---------------------------------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/revising-aggregations-the-count-function/problem?isFullScreen=true

-- Revising Aggregations - The Count Function

SELECT COUNT(ID) FROM CITY WHERE POPULATION >100000; 


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/what-type-of-triangle/problem?isFullScreen=true

-- Type of Triangle

SELECT CASE WHEN A + B <= C OR A + C <= B OR B + C <= A THEN 'Not A Triangle' 
WHEN A = B AND B = C THEN 'Equilateral' 
WHEN A = B OR B = C OR A = C THEN 'Isosceles' 
ELSE 'Scalene' 
END 
FROM TRIANGLES;


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/salary-of-employees/problem?isFullScreen=true

-- Employee Salaries

SELECT name FROM Employee WHERE salary >2000 AND months <10 ORDER BY employee_id;


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-11/problem?isFullScreen=true

-- Weather Observation Station 11

SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) NOT IN('A','E','I','O','U','a','e','i','o','u')
OR RIGHT(CITY,1) NOT IN ('A','E','I','O','U','a','e','i','o','u');


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-10/problem?isFullScreen=true

-- Weather Observation Station 10

SELECT DISTINCT CITY FROM STATION
WHERE RIGHT(CITY,1) NOT IN('A','E','I','O','U','a','e','i','o','u');


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-9/problem?isFullScreen=true

-- Weather Observation Station 9


SELECT DISTINCT CITY FROM STATION
WHERE LEFT(CITY,1) NOT IN('A','E','I','O','U','a','e','i','o','u');


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-8/problem?isFullScreen=true

-- Weather Observation Station 8


SELECT DISTINCT CITY FROM STATION
WHERE LEFT(CITY,1) IN('A','E','I','O','U','a','e','i','o','u')
AND RIGHT(CITY,1) IN('A','E','I','O','U','a','e','i','o','u');


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-7/problem?isFullScreen=true

-- Weather Observation Station 7

SELECT DISTINCT CITY FROM STATION WHERE RIGHT(CITY,1) IN('A','E','I','O','U','a','e','i','o','u');



---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-6/problem?isFullScreen=true

-- Weather Observation Station 6

SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) IN('A','E','I','O','U','a','e','i','o','u');


---------------------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-5/problem?isFullScreen=true

-- Weather Observation Station 5


SELECT CITY,LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY),CITY ASC LIMIT 1;
SELECT CITY,LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY) DESC,CITY  LIMIT 1;


