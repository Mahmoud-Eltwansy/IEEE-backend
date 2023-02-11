-- https://www.hackerrank.com/challenges/select-by-id/problem?isFullScreen=true

-- Select by ID

SELECT * FROM CITY WHERE ID=1661;


----------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/weather-observation-station-1/problem?isFullScreen=true

-- weather-observation-station 1

SELECT CITY,STATE FROM STATION;

----------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/revising-the-select-query-2/problem?isFullScreen=true

-- revising-the-select-query ||

SELECT NAME FROM CITY WHERE COUNTRYCODE='USA' AND POPULATION>120000;

----------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/weather-observation-station-3/problem?isFullScreen=true

-- Weather Observation Station 3

SELECT DISTINCT CITY FROM STATION WHERE MOD(ID,2)=0;


----------------------------------------------------------------------------------------

-- https://www.hackerrank.com/challenges/weather-observation-station-4/problem?isFullScreen=true

-- Weather Observation Station 4

SELECT COUNT(CITY)-COUNT(DISTINCT CITY) FROM STATION ;