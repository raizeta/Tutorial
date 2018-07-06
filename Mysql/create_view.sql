CREATE VIEW view_list_product_left_join_order_detail AS
	SELECT pro.id,pro.nama,pro.harga,tp.order_id,tp.quantity_order
	FROM Tbl_Products pro INNER JOIN Tbl_Transaksi_Pembelian tp
	ON pro.id = tp.id_product