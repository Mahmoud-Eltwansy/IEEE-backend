-- https://www.hackerrank.com/challenges/print-prime-numbers/problem?isFullScreen=true


DELIMITER //
CREATE PROCEDURE prime(num INT)
BEGIN
    DECLARE n INT unsigned  DEFAULT 6;
    DECLARE x INT unsigned  DEFAULT 2;
    DECLARE y INT unsigned  DEFAULT 0;
    DECLARE p VARCHAR(2000) DEFAULT '2&3&5';
    WHILE n < num DO
        WHILE x < n DO
            IF n % x =0
            THEN SET y = y + 1;
            END IF;
            SET  x = x + 1;
            END WHILE;
         IF y = 0
    THEN SET p = CONCAT(p, "&", n);
    END IF;
        SET n = n + 1;
        SET x = 2;
        SET y = 0;
    END WHILE;
    SELECT p;
END; //
DELIMITER ;

CALL prime(1000);