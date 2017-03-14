<?php
SELECT pelanggan.namapelanggan,product.namaproduct,typepenjualan.namatype,(0)as QTY 
FROM pelanggan 
CROSS JOIN product 
CROSS JOIN typepenjualan 
ORDER BY pelanggan.namapelanggan ASC, product.namaproduct ASC


SELECT pel.namapelanggan,pro.namaproduct,typep.namatype,IFNULL(s.quantity,0) AS QTY 
FROM pelanggan pel CROSS JOIN product pro CROSS JOIN typepenjualan typep 
LEFT OUTER JOIN penjualan s 
ON pel.id = s.fk_pelanggan AND 
pro.id = s.fk_product AND 
typep.id = s.fk_typepenjualan 
ORDER BY pel.id ASC, pro.id ASC, typep.id ASC