<!DOCTYPE html>
<html>
<head>
	<title>RESPONSI</title>
	<style type="text/css">
		body {
			background-color: coral-blue;
			color: black; 
		}
	</style>
</head>
<body>

<h2>Data Mahasiswa</h2>
<?php{?> 
<!--mengisi nilai dari variabel dan mengirimkan ke halaman data.php--> 
<form action="data.php" method="get">   
 <table width="100%" border="0">  
  <tr>  
   <td width="100">Nama</td>  
   <td><input type="text" name="nama"></td>  
  </tr>
  <tr>
  <td width="100">NIM</td>  
   <td><input type="text" name="NIM"></td>  
  </tr>    
  <tr>
  <td width="100">Prodi</td>  
   <td><input type="text" name="prodi"></td>  
  </tr>
  <td width="100"></td>  
   <td><input type="submit" value="input"></td>  
  </tr>  
  
  </table>
  </form>
  <!--kembali ke menu-->
  <a href="menu.html">menu</a>  


</body>
</html>