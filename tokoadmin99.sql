CREATE TABLE produk (
    id_produk INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(50) NOT NULL,
    harga INT(11) NOT NULL,
    foto VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO produk (nama_produk, harga, foto) VALUES
('Produk A', 50000, 'foto_a.jpg'),
('Produk B', 75000, 'foto_b.jpg'),
('Produk C', 100000, 'foto_c.jpg');
