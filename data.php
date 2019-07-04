<?php
//menangkap nilai dari halaman sebelumnya 
$nama = isset($_GET['nama']) ? $_GET['nama'] : "";
$NIM = isset($_GET['NIM']) ? $_GET['NIM'] : "";
$prodi = isset($_GET['prodi']) ? $_GET['prodi'] : "";
$file=fopen('mhs.txt',"w");
//mengisi nilai dari setiap variabel sesuai dengan yang telah di inputkan
fwrite($file, $nama);
fwrite($file, '/n');
fwrite($file, $NIM);
fwrite($file, '/n');
fwrite($file, $prodi);
fclose($file);
//menampilkan nilai yang telah di inputkan
echo "nama :".$nama.'<br>'."NIM :".$NIM.'<br>'."prodi :".$prodi;
?>