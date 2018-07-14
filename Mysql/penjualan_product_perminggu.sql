SELECT A.id,A.nama,
SUM(CASE WHEN A.week_in_number = 1  THEN tot ELSE 0 END)AS W01,
SUM(CASE WHEN A.week_in_number = 2  THEN tot ELSE 0 END)AS W02,
SUM(CASE WHEN A.week_in_number = 3  THEN tot ELSE 0 END)AS W03,
SUM(CASE WHEN A.week_in_number = 4  THEN tot ELSE 0 END)AS W04,
SUM(CASE WHEN A.week_in_number = 5  THEN tot ELSE 0 END)AS W05,
SUM(CASE WHEN A.week_in_number = 6  THEN tot ELSE 0 END)AS W06,
SUM(CASE WHEN A.week_in_number = 7  THEN tot ELSE 0 END)AS W07,
SUM(CASE WHEN A.week_in_number = 8  THEN tot ELSE 0 END)AS W08,
SUM(CASE WHEN A.week_in_number = 9  THEN tot ELSE 0 END)AS W09,
SUM(CASE WHEN A.week_in_number = 10 THEN tot ELSE 0 END)AS W10,
SUM(CASE WHEN A.week_in_number = 11 THEN tot ELSE 0 END)AS W11,
SUM(CASE WHEN A.week_in_number = 12 THEN tot ELSE 0 END)AS W12,

SUM(CASE WHEN A.week_in_number = 13  THEN tot ELSE 0 END)AS W13,
SUM(CASE WHEN A.week_in_number = 14  THEN tot ELSE 0 END)AS W14,
SUM(CASE WHEN A.week_in_number = 15 THEN tot ELSE 0 END)AS W15,
SUM(CASE WHEN A.week_in_number = 16 THEN tot ELSE 0 END)AS W16,
SUM(CASE WHEN A.week_in_number = 17  THEN tot ELSE 0 END)AS W17,
SUM(CASE WHEN A.week_in_number = 18  THEN tot ELSE 0 END)AS W18,
SUM(CASE WHEN A.week_in_number = 19  THEN tot ELSE 0 END)AS W19,
SUM(CASE WHEN A.week_in_number = 20  THEN tot ELSE 0 END)AS W20,
SUM(CASE WHEN A.week_in_number = 21  THEN tot ELSE 0 END)AS W21,
SUM(CASE WHEN A.week_in_number = 22 THEN tot ELSE 0 END)AS W22,
SUM(CASE WHEN A.week_in_number = 23 THEN tot ELSE 0 END)AS W23,
SUM(CASE WHEN A.week_in_number = 24 THEN tot ELSE 0 END)AS W24,

SUM(CASE WHEN A.week_in_number = 25  THEN tot ELSE 0 END)AS W25,
SUM(CASE WHEN A.week_in_number = 26  THEN tot ELSE 0 END)AS W26,
SUM(CASE WHEN A.week_in_number = 27  THEN tot ELSE 0 END)AS W27,
SUM(CASE WHEN A.week_in_number = 28 THEN tot ELSE 0 END)AS W28,
SUM(CASE WHEN A.week_in_number = 29 THEN tot ELSE 0 END)AS W29,
SUM(CASE WHEN A.week_in_number = 30  THEN tot ELSE 0 END)AS W30,
SUM(CASE WHEN A.week_in_number = 31  THEN tot ELSE 0 END)AS W31,
SUM(CASE WHEN A.week_in_number = 32  THEN tot ELSE 0 END)AS W32,
SUM(CASE WHEN A.week_in_number = 33  THEN tot ELSE 0 END)AS W33,
SUM(CASE WHEN A.week_in_number = 34  THEN tot ELSE 0 END)AS W34,
SUM(CASE WHEN A.week_in_number = 35 THEN tot ELSE 0 END)AS W35,
SUM(CASE WHEN A.week_in_number = 36 THEN tot ELSE 0 END)AS W36,
SUM(CASE WHEN A.week_in_number = 37 THEN tot ELSE 0 END)AS W37,

SUM(CASE WHEN A.week_in_number = 38  THEN tot ELSE 0 END)AS W38,
SUM(CASE WHEN A.week_in_number = 39  THEN tot ELSE 0 END)AS W39,
SUM(CASE WHEN A.week_in_number = 40  THEN tot ELSE 0 END)AS W40,
SUM(CASE WHEN A.week_in_number = 41 THEN tot ELSE 0 END)AS W41,
SUM(CASE WHEN A.week_in_number = 42 THEN tot ELSE 0 END)AS W42,
SUM(CASE WHEN A.week_in_number = 43  THEN tot ELSE 0 END)AS W43,
SUM(CASE WHEN A.week_in_number = 44  THEN tot ELSE 0 END)AS W44,
SUM(CASE WHEN A.week_in_number = 45  THEN tot ELSE 0 END)AS W45,
SUM(CASE WHEN A.week_in_number = 46  THEN tot ELSE 0 END)AS W46,
SUM(CASE WHEN A.week_in_number = 47  THEN tot ELSE 0 END)AS W47,
SUM(CASE WHEN A.week_in_number = 48 THEN tot ELSE 0 END)AS W48,
SUM(CASE WHEN A.week_in_number = 49 THEN tot ELSE 0 END)AS W49,
SUM(CASE WHEN A.week_in_number = 50 THEN tot ELSE 0 END)AS W50,

SUM(CASE WHEN A.week_in_number = 51 THEN tot ELSE 0 END)AS W51,
SUM(CASE WHEN A.week_in_number = 52 THEN tot ELSE 0 END)AS W52,
SUM(CASE WHEN A.week_in_number = 53 THEN tot ELSE 0 END)AS W53,

(CASE WHEN SUM(A.tot) IS NULL THEN 0 ELSE SUM(A.tot) END)AS sub
FROM
(
    SELECT p.id,p.nama,SUM(tr.jumlah) AS tot,EXTRACT(WEEK FROM ord.order_date)AS week_in_number 
    FROM product p 
    LEFT JOIN transaksi_pembelian tr on p.id = tr.products
    LEFT JOIN orders ord on tr.orders = ord.id
    GROUP BY EXTRACT(WEEK FROM ord.order_date),p.nama
)A GROUP BY A.nama ORDER BY A.id ASC