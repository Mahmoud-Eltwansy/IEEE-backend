-- https://www.hackerrank.com/challenges/contest-leaderboard/problem?isFullScreen=true

SELECT M.hacker_id,H.name,SUM(M.maxscore) FROM
(SELECT hacker_id,challenge_id,max(score) AS maxscore FROM Submissions GROUP BY hacker_id,challenge_id) M
JOIN Hackers H ON H.hacker_id=M.hacker_id
GROUP BY M.hacker_id,H.name 
HAVING SUM(M.maxscore)>0
ORDER BY SUM(M.maxscore) DESC, hacker_id;