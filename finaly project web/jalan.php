<?php
$fp = fopen("tamu.txt", "a+");//untuk membuka file
$nama		= $_POST['nama'];//untuk menampilkan nama
$tanggal	= $_POST['tanggal'];//untuk menampilkan tanggal
$jk			= $_POST['jk'];//untuk menampilkan jenis kelamin
$alamat		= $_POST['alamat'];//untuk menampilkan alamat
$agama		= $_POST['agama'];//untuk menampilkan agama

fputs($fp, "$nama|$tanggal|$jk|$alamat|$agama\n");//menulis ke file terbuka
fclose($fp);//untuk menutup file sesudah membuka file tersebut
if($fp!=0){//untuk membuka file
	header("location: lihat_tamu.php");//untuk tampilan di atas
}
else{
	echo "Data Tidak Masuk !!!";//untuk menampilkan hasil output sebanyak satu atau lebih data yang di pisahkan dengan tanda koma
}

?>