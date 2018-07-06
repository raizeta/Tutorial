#CARA PERTAMA
SELECT mp.id,mp.nama,A.product_id,
SUM(CASE WHEN order_date = 1  THEN tot ELSE 0 END)AS jan,
SUM(CASE WHEN order_date = 2  THEN tot ELSE 0 END)AS feb,
SUM(CASE WHEN order_date = 3  THEN tot ELSE 0 END)AS mar,
SUM(CASE WHEN order_date = 4  THEN tot ELSE 0 END)AS apr,
SUM(CASE WHEN order_date = 5  THEN tot ELSE 0 END)AS may,
SUM(CASE WHEN order_date = 6  THEN tot ELSE 0 END)AS jun,
SUM(CASE WHEN order_date = 7  THEN tot ELSE 0 END)AS jul,
SUM(CASE WHEN order_date = 8  THEN tot ELSE 0 END)AS aug,
SUM(CASE WHEN order_date = 9  THEN tot ELSE 0 END)AS sep,
SUM(CASE WHEN order_date = 10 THEN tot ELSE 0 END)AS okt,
SUM(CASE WHEN order_date = 11 THEN tot ELSE 0 END)AS nov,
SUM(CASE WHEN order_date = 12 THEN tot ELSE 0 END)AS des,
(CASE WHEN SUM(A.tot) IS NULL THEN 0 ELSE SUM(A.tot) END)AS sub
FROM
(
    SELECT SUM(tp.jumlah)AS tot,
    EXTRACT(MONTH FROM o.order_date)AS order_date,
    p.nama AS nama,p.id AS product_id
    FROM transaksi_pembelian tp
    INNER JOIN orders o on tp.orders = o.id
    INNER JOIN product p on tp.products = p.id
    GROUP BY EXTRACT(MONTH FROM order_date),nama
)A 
RIGHT JOIN product mp on A.product_id = mp.id GROUP BY nama ORDER BY sub DESC 


#CARA KEDUA
SELECT A.id,A.nama,
SUM(CASE WHEN A.month_in_number = 1  THEN tot ELSE 0 END)AS jan,
SUM(CASE WHEN A.month_in_number = 2  THEN tot ELSE 0 END)AS feb,
SUM(CASE WHEN A.month_in_number = 3  THEN tot ELSE 0 END)AS mar,
SUM(CASE WHEN A.month_in_number = 4  THEN tot ELSE 0 END)AS apr,
SUM(CASE WHEN A.month_in_number = 5  THEN tot ELSE 0 END)AS may,
SUM(CASE WHEN A.month_in_number = 6  THEN tot ELSE 0 END)AS jun,
SUM(CASE WHEN A.month_in_number = 7  THEN tot ELSE 0 END)AS jul,
SUM(CASE WHEN A.month_in_number = 8  THEN tot ELSE 0 END)AS aug,
SUM(CASE WHEN A.month_in_number = 9  THEN tot ELSE 0 END)AS sep,
SUM(CASE WHEN A.month_in_number = 10 THEN tot ELSE 0 END)AS okt,
SUM(CASE WHEN A.month_in_number = 11 THEN tot ELSE 0 END)AS nov,
SUM(CASE WHEN A.month_in_number = 12 THEN tot ELSE 0 END)AS des,
(CASE WHEN SUM(A.tot) IS NULL THEN 0 ELSE SUM(A.tot) END)AS sub
FROM
(
    SELECT p.id,p.nama,
    (CASE WHEN tr.jumlah IS NULL THEN 0 ELSE tr.jumlah END)AS jumlah,
    (CASE WHEN tr.harga IS NULL THEN 0 ELSE tr.harga END)AS harga,
    CONCAT(ord.resi,'',ord.id)AS NORESI,
    (CASE WHEN SUM(tr.jumlah) IS NULL THEN 0 ELSE SUM(tr.jumlah) END )AS tot,
    EXTRACT(MONTH FROM ord.order_date)AS month_in_number FROM product p 
        LEFT JOIN transaksi_pembelian tr on p.id = tr.products
        LEFT JOIN orders ord on tr.orders = ord.id
    GROUP BY EXTRACT(MONTH FROM ord.order_date),p.nama
)A GROUP BY A.nama ORDER BY sub DESC