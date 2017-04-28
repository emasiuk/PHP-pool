SELECT title, summary
FROM db_emasiuk.film
WHERE lower(summary) LIKE '%vincent%';
