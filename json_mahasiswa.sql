CREATE DATABASE IF NOT EXISTS json_mahasiswa;
USE json_mahasiswa;

CREATE TABLE mahasiswa (
    nim VARCHAR(8),
    nama VARCHAR(64),
    alamat VARCHAR(128)
);

INSERT INTO mahasiswa VALUES ("10101010", "Justin Biner", "Jl. Dipatiukur No.1");
INSERT INTO mahasiswa VALUES ("10107424", "Sanusi Rion", "Jalan Tubagus Ismail Bawah no 2");
INSERT INTO mahasiswa VALUES ("10107444", "Wawan Adhitya", "Jalan Sekeloa no 8");