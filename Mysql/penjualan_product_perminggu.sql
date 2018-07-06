SELECT A.id,A.nama,
SUM(CASE WHEN A.week_in_number = 1  THEN tot ELSE 0 END)AS '1',
SUM(CASE WHEN A.week_in_number = 2  THEN tot ELSE 0 END)AS '2',
SUM(CASE WHEN A.week_in_number = 3  THEN tot ELSE 0 END)AS '3',
SUM(CASE WHEN A.week_in_number = 4  THEN tot ELSE 0 END)AS '4',
SUM(CASE WHEN A.week_in_number = 5  THEN tot ELSE 0 END)AS '5',
SUM(CASE WHEN A.week_in_number = 6  THEN tot ELSE 0 END)AS '6',
SUM(CASE WHEN A.week_in_number = 7  THEN tot ELSE 0 END)AS '7',
SUM(CASE WHEN A.week_in_number = 8  THEN tot ELSE 0 END)AS '8',
SUM(CASE WHEN A.week_in_number = 9  THEN tot ELSE 0 END)AS '9',
SUM(CASE WHEN A.week_in_number = 10 THEN tot ELSE 0 END)AS '10',
SUM(CASE WHEN A.week_in_number = 11 THEN tot ELSE 0 END)AS '11',
SUM(CASE WHEN A.week_in_number = 12 THEN tot ELSE 0 END)AS '12',

SUM(CASE WHEN A.week_in_number = 13  THEN tot ELSE 0 END)AS '13',
SUM(CASE WHEN A.week_in_number = 14  THEN tot ELSE 0 END)AS '14',
SUM(CASE WHEN A.week_in_number = 15 THEN tot ELSE 0 END)AS '15',
SUM(CASE WHEN A.week_in_number = 16 THEN tot ELSE 0 END)AS '16',
SUM(CASE WHEN A.week_in_number = 17  THEN tot ELSE 0 END)AS '17',
SUM(CASE WHEN A.week_in_number = 18  THEN tot ELSE 0 END)AS '18',
SUM(CASE WHEN A.week_in_number = 19  THEN tot ELSE 0 END)AS '19',
SUM(CASE WHEN A.week_in_number = 20  THEN tot ELSE 0 END)AS '20',
SUM(CASE WHEN A.week_in_number = 21  THEN tot ELSE 0 END)AS '21',
SUM(CASE WHEN A.week_in_number = 22 THEN tot ELSE 0 END)AS '22',
SUM(CASE WHEN A.week_in_number = 23 THEN tot ELSE 0 END)AS '23',
SUM(CASE WHEN A.week_in_number = 24 THEN tot ELSE 0 END)AS '24',

SUM(CASE WHEN A.week_in_number = 25  THEN tot ELSE 0 END)AS '25',
SUM(CASE WHEN A.week_in_number = 26  THEN tot ELSE 0 END)AS '26',
SUM(CASE WHEN A.week_in_number = 27  THEN tot ELSE 0 END)AS '27',
SUM(CASE WHEN A.week_in_number = 28 THEN tot ELSE 0 END)AS '28',
SUM(CASE WHEN A.week_in_number = 29 THEN tot ELSE 0 END)AS '29',
SUM(CASE WHEN A.week_in_number = 30  THEN tot ELSE 0 END)AS '30',
SUM(CASE WHEN A.week_in_number = 31  THEN tot ELSE 0 END)AS '31',
SUM(CASE WHEN A.week_in_number = 32  THEN tot ELSE 0 END)AS '32',
SUM(CASE WHEN A.week_in_number = 33  THEN tot ELSE 0 END)AS '33',
SUM(CASE WHEN A.week_in_number = 34  THEN tot ELSE 0 END)AS '34',
SUM(CASE WHEN A.week_in_number = 35 THEN tot ELSE 0 END)AS '35',
SUM(CASE WHEN A.week_in_number = 36 THEN tot ELSE 0 END)AS '36',
SUM(CASE WHEN A.week_in_number = 37 THEN tot ELSE 0 END)AS '37',

SUM(CASE WHEN A.week_in_number = 38  THEN tot ELSE 0 END)AS '38',
SUM(CASE WHEN A.week_in_number = 39  THEN tot ELSE 0 END)AS '39',
SUM(CASE WHEN A.week_in_number = 40  THEN tot ELSE 0 END)AS '40',
SUM(CASE WHEN A.week_in_number = 41 THEN tot ELSE 0 END)AS '41',
SUM(CASE WHEN A.week_in_number = 42 THEN tot ELSE 0 END)AS '42',
SUM(CASE WHEN A.week_in_number = 43  THEN tot ELSE 0 END)AS '43',
SUM(CASE WHEN A.week_in_number = 44  THEN tot ELSE 0 END)AS '44',
SUM(CASE WHEN A.week_in_number = 45  THEN tot ELSE 0 END)AS '45',
SUM(CASE WHEN A.week_in_number = 46  THEN tot ELSE 0 END)AS '46',
SUM(CASE WHEN A.week_in_number = 47  THEN tot ELSE 0 END)AS '47',
SUM(CASE WHEN A.week_in_number = 48 THEN tot ELSE 0 END)AS '48',
SUM(CASE WHEN A.week_in_number = 49 THEN tot ELSE 0 END)AS '49',
SUM(CASE WHEN A.week_in_number = 50 THEN tot ELSE 0 END)AS '50',

SUM(CASE WHEN A.week_in_number = 51 THEN tot ELSE 0 END)AS '51',
SUM(CASE WHEN A.week_in_number = 52 THEN tot ELSE 0 END)AS '52',
SUM(CASE WHEN A.week_in_number = 53 THEN tot ELSE 0 END)AS '53',

(CASE WHEN SUM(A.tot) IS NULL THEN 0 ELSE SUM(A.tot) END)AS sub
FROM
(
    SELECT p.id,p.nama,SUM(tr.jumlah) AS tot,EXTRACT(WEEK FROM ord.order_date)AS week_in_number 
    FROM product p 
    LEFT JOIN transaksi_pembelian tr on p.id = tr.products
    LEFT JOIN orders ord on tr.orders = ord.id
    GROUP BY EXTRACT(WEEK FROM ord.order_date),p.nama
)A GROUP BY A.nama ORDER BY A.id ASC