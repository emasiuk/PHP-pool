SELECT title as Title, summary as Summary, prod_year
FROM db_emasiuk.film
WHERE id_genre = (SELECT id_genre FROM db_emasiuk.genre
	WHERE name = 'erotic')
ORDER BY title DESC;
