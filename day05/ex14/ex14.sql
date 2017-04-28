SELECT floor_number as 'floor', SUM(nb_seats) AS seats
FROM db_emasiuk.cinema
group by floor_number
ORDER BY SUM(nb_seats) DESC;
