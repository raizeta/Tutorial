public function productsaleseveryweek()
        {
                $rsm = new ResultSetMapping;
                $rsm->addEntityResult('EntityBundle:TransaksiPembelian', 'tp');
                $rsm->addJoinedEntityResult('EntityBundle:Orders' , 'o', 'tp', 'orders');
                $rsm->addJoinedEntityResult('EntityBundle:Product' , 'p', 'tp', 'products');

                $rsm->addScalarResult('nama', 'nama');
                $rsm->addScalarResult('jan', 'jan');
                $rsm->addScalarResult('feb', 'feb');
                $rsm->addScalarResult('mar', 'mar');
                $rsm->addScalarResult('apr', 'apr');
                $rsm->addScalarResult('may', 'may');
                $rsm->addScalarResult('jun', 'jun');
                $rsm->addScalarResult('jul', 'jul');
                $rsm->addScalarResult('aug', 'aug');
                $rsm->addScalarResult('sep', 'sep');
                $rsm->addScalarResult('okt', 'okt');
                $rsm->addScalarResult('nov', 'nov');
                $rsm->addScalarResult('des', 'des');
                $rsm->addScalarResult('sub', 'sub');
                
                $sql    =  'SELECT mp.id,mp.nama,A.product_id,
                            SUM(CASE WHEN A.order_date = 1  THEN tot ELSE 0 END)AS 1,
                            SUM(CASE WHEN A.order_date = 2  THEN tot ELSE 0 END)AS 2,
                            SUM(CASE WHEN A.order_date = 3  THEN tot ELSE 0 END)AS 3,
                            SUM(CASE WHEN A.order_date = 4  THEN tot ELSE 0 END)AS 4,
                            SUM(CASE WHEN A.order_date = 5  THEN tot ELSE 0 END)AS 5,
                            SUM(CASE WHEN A.order_date = 6  THEN tot ELSE 0 END)AS 6,
                            SUM(CASE WHEN A.order_date = 7  THEN tot ELSE 0 END)AS 7,
                            SUM(CASE WHEN A.order_date = 8  THEN tot ELSE 0 END)AS 8,
                            SUM(CASE WHEN A.order_date = 9  THEN tot ELSE 0 END)AS 9,
                            SUM(CASE WHEN A.order_date = 10 THEN tot ELSE 0 END)AS 10,
                            SUM(CASE WHEN A.order_date = 11 THEN tot ELSE 0 END)AS 11,
                            SUM(CASE WHEN A.order_date = 12 THEN tot ELSE 0 END)AS 12,

                            SUM(CASE WHEN A.order_date = 13  THEN tot ELSE 0 END)AS 13,
                            SUM(CASE WHEN A.order_date = 14  THEN tot ELSE 0 END)AS 14,
                            SUM(CASE WHEN A.order_date = 15 THEN tot ELSE 0 END)AS 15,
                            SUM(CASE WHEN A.order_date = 16 THEN tot ELSE 0 END)AS 16,
                            SUM(CASE WHEN A.order_date = 17  THEN tot ELSE 0 END)AS 17,
                            SUM(CASE WHEN A.order_date = 18  THEN tot ELSE 0 END)AS 18,
                            SUM(CASE WHEN A.order_date = 19  THEN tot ELSE 0 END)AS 19,
                            SUM(CASE WHEN A.order_date = 20  THEN tot ELSE 0 END)AS 20,
                            SUM(CASE WHEN A.order_date = 21  THEN tot ELSE 0 END)AS 21,
                            SUM(CASE WHEN A.order_date = 22 THEN tot ELSE 0 END)AS 22,
                            SUM(CASE WHEN A.order_date = 23 THEN tot ELSE 0 END)AS 23,
                            SUM(CASE WHEN A.order_date = 24 THEN tot ELSE 0 END)AS 24,

                            SUM(CASE WHEN A.order_date = 25  THEN tot ELSE 0 END)AS 25,
                            SUM(CASE WHEN A.order_date = 26  THEN tot ELSE 0 END)AS 26,
                            SUM(CASE WHEN A.order_date = 27  THEN tot ELSE 0 END)AS 27,
                            SUM(CASE WHEN A.order_date = 28 THEN tot ELSE 0 END)AS 28,
                            SUM(CASE WHEN A.order_date = 29 THEN tot ELSE 0 END)AS 29,
                            SUM(CASE WHEN A.order_date = 30  THEN tot ELSE 0 END)AS 30,
                            SUM(CASE WHEN A.order_date = 31  THEN tot ELSE 0 END)AS 31,
                            SUM(CASE WHEN A.order_date = 32  THEN tot ELSE 0 END)AS 32,
                            SUM(CASE WHEN A.order_date = 33  THEN tot ELSE 0 END)AS 33,
                            SUM(CASE WHEN A.order_date = 34  THEN tot ELSE 0 END)AS 34,
                            SUM(CASE WHEN A.order_date = 35 THEN tot ELSE 0 END)AS 35,
                            SUM(CASE WHEN A.order_date = 36 THEN tot ELSE 0 END)AS 36,
                            SUM(CASE WHEN A.order_date = 37 THEN tot ELSE 0 END)AS 37,

                            SUM(CASE WHEN A.order_date = 38  THEN tot ELSE 0 END)AS 38,
                            SUM(CASE WHEN A.order_date = 39  THEN tot ELSE 0 END)AS 39,
                            SUM(CASE WHEN A.order_date = 40  THEN tot ELSE 0 END)AS 40,
                            SUM(CASE WHEN A.order_date = 41 THEN tot ELSE 0 END)AS 41,
                            SUM(CASE WHEN A.order_date = 42 THEN tot ELSE 0 END)AS 42,
                            SUM(CASE WHEN A.order_date = 43  THEN tot ELSE 0 END)AS 43,
                            SUM(CASE WHEN A.order_date = 44  THEN tot ELSE 0 END)AS 44,
                            SUM(CASE WHEN A.order_date = 45  THEN tot ELSE 0 END)AS 45,
                            SUM(CASE WHEN A.order_date = 46  THEN tot ELSE 0 END)AS 46,
                            SUM(CASE WHEN A.order_date = 47  THEN tot ELSE 0 END)AS 47,
                            SUM(CASE WHEN A.order_date = 48 THEN tot ELSE 0 END)AS 48,
                            SUM(CASE WHEN A.order_date = 49 THEN tot ELSE 0 END)AS 49,
                            SUM(CASE WHEN A.order_date = 50 THEN tot ELSE 0 END)AS 50,

                            SUM(CASE WHEN A.order_date = 51 THEN tot ELSE 0 END)AS 51,
                            SUM(CASE WHEN A.order_date = 52 THEN tot ELSE 0 END)AS 52,
                            SUM(CASE WHEN A.order_date = 53 THEN tot ELSE 0 END)AS 53,
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
                           ';

                $query  = $this->getEntityManager()->createNativeQuery($sql, $rsm);
                return $query->getArrayResult();
        }