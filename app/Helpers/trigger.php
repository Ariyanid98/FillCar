DELIMITER $$
 
CREATE TRIGGER `batal_transaksi` AFTER DELETE ON `detail_transaksi` FOR EACH ROW BEGIN
 
UPDATE masakan SET stok = stok + OLD.qty
 
WHERE id_produk = OLD.id_produk;
 
END
 
$$
 
DELIMITER ;
 
DELIMITER $$
 
CREATE TRIGGER `tambah_transaksi` AFTER INSERT ON `detail_transaksi` FOR EACH ROW BEGIN
 
UPDATE masakan SET stok = stok - NEW.qty
 
WHERE id_produk = NEW.id_produk;
 
END
 
$$

DELIMITER ;