<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
include 'koneksi.php';
$txtnm =$_POST["txtnm"];
$txtalamat =$_POST["txtalamat"];
$txttlp =$_POST["txttlp"];
$txthp =$_POST["txthp"];
$txtasalskl =$_POST["txtasalskl"];
$txtrank =$_POST["txtrank"];
$txtnmot =$_POST["txtnmot"];
$txthpot =$_POST["txthpot"];
$txtfb =$_POST["txtfb"];
$txttwitter =$_POST["txttwitter"];
$txtinstagram =$_POST["txtinstagram"];
$txtline =$_POST["txtline"];
$txtemail =$_POST["txtemail"];

$tta=date('Y')+1;
//$dsekarang=date('Y-m-d');
$sqlpmb=mssql_query("select max(tahun)as TA,GETDATE() as tgl from cPMBJadwal ");
$pmbh=mssql_fetch_array($sqlpmb);
$ta1=$pmbh['TA'];
$dsekarang=$pmbh['tgl'];

if ($_POST["txtnm"]=="" or $_POST["txtalamat"]=="" or $_POST["txttlp"]="" or $_POST["txthp"]=="" or $_POST["txtasalskl"]=="" 
	or $_POST["txtrank"]="" or $_POST["txtnmot"]=="" or $_POST["txthpot"]="" or $_POST["txtfb"]="" or $_POST["txtinstagram"]=="" or $_POST["txtline"]="" or $_POST["txtemail"]="") {
	echo "<script>alert('Mohon di isi semua !'); window.location = 'index.php';</script>";
}else{
	if ($_SESSION["Captcha"]!=$_POST["txtcap"]) {
		echo "<script>alert('Kode Captcha Salah !');window.location = 'index.php';</script>";
 	}
		else{
		$sqlinser =mssql_query("insert into angket
		(nama,alamat,tlp,hp,skl_asal,ranking,nm_ayah,hp_ot,fb,twitter,instagram,line,email,beasiswa,ta,deo_tg) 
		values 
		('$txtnm','$txtalamat','$txttlp','$txthp','$txtasalskl','$txtrank','$txtnmot','$txthpot','$txtfb','$txttwitter','$txtinstagram','$txtline','$txtemail',1,'$ta1/$tta','$dsekarang')");
		if ($sqlinser) {
			echo "<script>alert('Data tersimpan !'); window.location = 'index.php';</script>";
		}else{
			echo "<script>alert('Data Gagal tersimpan !'); window.location = 'index.php';</script>";
		}	
	}
	
}

?>
</head>
<body>

</body>
</html>

