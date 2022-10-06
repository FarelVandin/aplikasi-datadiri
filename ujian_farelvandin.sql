1.SELECT * FROM tb_obat WHERE satuan="Botol";
2.SELECT * FROM `tb_obat` WHERE jenis = 'Obat Terbatas' OR jenis = 'Obat Keras';
3.SELECT * FROM tb_obat WHERE stok < 50 ORDER BY stok DESC;
4. SELECT * FROM tb_obat WHERE satuan != "tablet";
5.SELECT * FROM `tb_obat` WHERE jenis = 'Obat Bebas' ORDER BY harga_jual ASC; 
6.SELECT * FROM tb_obat WHERE harga_beli BETWEEN 10000 AND 100000 AND satuan = "Botol";
7.SELECT * FROM `tb_obat` WHERE jenis = 'Obat Bebas' AND stok >=5 ; 
8. SELECT * FROM tb_obat WHERE nama_obat LIKE 'B%';
9. SELECT * FROM tb_obat WHERE nama_obat LIKE '%OM%';
10.SELECT satuan, SUM(stok) AS total_stok FROM tb_obat GROUP BY satuan;
11.SELECT SUM(harga_jual) as 'total' FROM tb_obat GROUP BY jenis;
12.SELECT * FROM `tb_obat` WHERE kode_obat = 'K001' OR kode_obat = 'K003' OR kode_obat = 'K005' OR kode_obat = 'K007';
13.SELECT nama_obat,stok,harga_beli,harga_jual,(harga_beli * stok) AS total_harga_beli,(harga_jual * stok) AS total_harga_jual ,((harga_jual * stok) - (harga_beli * stok))  AS laba FROM `tb_obat` ;
14.SELECT AVG(harga_jual) 'rata-rata' FROM tb_obat WHERE satuan != "Lembar";
15.SELECT MAX(harga_beli) AS harga_jual_tertinggi, MIN(harga_beli) AS harga_jual_terendah FROM tb_obat;