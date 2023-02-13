-- https://www.hackerrank.com/challenges/select-all-sql/problem?isFullScreen=true

-- Select All

SELECT * FROM CITY;


---------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/revising-the-select-query/problem?isFullScreen=true

-- Revising the Select Query I

SELECT * FROM CITY WHERE COUNTRYCODE='USA' AND POPULATION >100000;

---------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/japanese-cities-attributes/problem?isFullScreen=true

-- Japanese Cities' Attributes

SELECT * FROM CITY WHERE COUNTRYCODE='JPN';


---------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/japanese-cities-name/problem?isFullScreen=true

-- Japanese Cities' Names

SELECT NAME FROM CITY WHERE COUNTRYCODE='JPN';


---------------------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/name-of-employees/problem?isFullScreen=true

-- Employee Names

SELECT name FROM EMPLOYEE ORDER BY name;


---------------------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/more-than-75-marks/problem?isFullScreen=true

-- Higher Than 75 Marks

SELECT Name FROM STUDENTS WHERE Marks >75 ORDER BY RIGHT(Name,3),ID;



---------------------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true

-- Weather Observation Station 2


SELECT CAST(ROUND(SUM(LAT_N), 2) AS DECIMAL(10,2)),CAST(ROUND(SUM(LONG_W), 2) AS DECIMAL(10,2)) FROM STATION;



---------------------------------------------------------------------------------------------------
-- https://www.hackerrank.com/challenges/weather-observation-station-12/problem?isFullScreen=true

-- Weather Observation Station 12


SELECT DISTINCT CITY FROM STATION
WHERE LEFT(CITY,1) NOT IN ('A','E','I','O','U','a','e','i','o','u') 
AND RIGHT(CITY,1) NOT IN ('A','E','I','O','U','a','e','i','o','u');