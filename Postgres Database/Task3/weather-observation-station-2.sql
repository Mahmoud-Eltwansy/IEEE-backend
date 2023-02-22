-- https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true

SELECT CAST(ROUND(SUM(LAT_N), 2) AS DECIMAL(10,2)),CAST(ROUND(SUM(LONG_W), 2) AS DECIMAL(10,2)) FROM STATION;
