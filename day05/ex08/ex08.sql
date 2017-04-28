SELECT last_name, first_name, DATE(birthdate) AS birthdate
FROM db_emasiuk.user_card
WHERE EXTRACT(YEAR FROM birthdate) = 1989
ORDER BY last_name ASC;
