<!DOCTYPE html>
<html>
<head>
	<title>FINAL PROJECT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
	<br>
	<br>
	<center><h1 style="font-size: 30px; font-family: algerian;float: center;color: white;"id="hasil" ></h1></center>
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html"><b>Home</b></a></li>
			<li><a href="lihat_tamu.php"><b>pengunjung</b></a></li>
			<li><a href="news.html"><b>News</a></b></li>
			<li><a href="contact.html"><b>profil</hasil/a></li>
			<center><form name="formcari" onSubmit="cari()"><pre>
  			                                    			<input class="search" name="keyword" type="text" placeholder="Cari..." required><input class="button" type="submit" value="Cari">		
			</form></pre></center>
		</ul>
		<script>
		var tanggal = new Date();
 
		document.getElementById("hasil").innerHTML = tanggal;
	</script>
</div>	
<div class="menu2">
	<center>
		<h2><font color="white">PENGUNJUNG WEBSITE SAYA</h2>
		<hr width="88%">
	</center>
	<?php
	error_reporting(0);
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";

	$fp = fopen("tamu.txt", "r");
	echo "<table border=1 width=95%>";
	echo "<th>No.</th>";
	echo "<th>Nama Lengkap</th>";
	echo "<th>Tanggal Lahir</th>";
	echo "<th>Jenis Kelamin</th>";
	echo "<th>Alamat</th>";
	echo "<th>Agama</th>";
	while($isi = fgets($fp,80))
	{
		$pisah = explode("|",$isi);
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td><center>$pisah[0]</center></td>";
		echo "<td><center>$pisah[1]</center></td>";
		echo "<td><center>$pisah[2]</center></td>";
		echo "<td><center>$pisah[3]</center></td>";
		echo "<td><center>$pisah[4]</center></td></tr>";
	$bil++;
	}
	echo "</table>";
	echo "<br>";
	echo "<a class=btn1 href=index.html> Isi Buku Tamu </a>&nbsp";
	echo "<a class=btn2 href=contact.html> Profil </a>";
	
	


	?>
	
</div>

</body>
</html>