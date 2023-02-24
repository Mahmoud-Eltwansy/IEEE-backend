-- https://www.hackerrank.com/challenges/full-score/problem?isFullScreen=true

SELECT H.hacker_id,H.name FROM Submissions AS S
JOIN Hackers AS H ON S.hacker_id=H.hacker_id
JOIN Challenges AS C ON C.challenge_id=S.challenge_id
JOIN Difficulty AS D ON D.difficulty_level=C.difficulty_level
WHERE D.score=S.score
GROUP BY H.hacker_id,H.name
HAVING COUNT(S.score)>1
ORDER BY COUNT(S.score) DESC,H.hacker_id;