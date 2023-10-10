<?php
	include "fungsi/koneksi.php";
	$Id_matpel =$_POST[id_matpel];
	$Tanggal =$_POST[tanggal_ulangan];
	$NIS =$_POST[nis_ujian];
	
	$nilai=0;
	$benar1=$_POST[jawaban_benar0];
	$jawaban1=$_POST[jawabannya0];
	if($benar1==$jawaban1){
		$nilai+=5;
	}
	$benar2=$_POST[jawaban_benar1];
	$jawaban2=$_POST[jawabannya1];
	if($benar2==$jawaban2){
		$nilai+=5;
	}
	$benar3=$_POST[jawaban_benar2];
	$jawaban3=$_POST[jawabannya2];
	if($benar3==$jawaban3){
		$nilai+=5;
	}
	
	$benar4=$_POST[jawaban_benar3];
	$jawaban4=$_POST[jawabannya3];
	if($benar4==$jawaban4){
		$nilai+=5;
	}
	
	$benar5=$_POST[jawaban_benar4];
	$jawaban5=$_POST[jawabannya4];
	if($benar5==$jawaban5){
		$nilai+=5;
	}
	$benar6=$_POST[jawaban_benar5];
	$jawaban6=$_POST[jawabannya5];
	if($benar6==$jawaban6){
		$nilai+=5;
	}
	$benar7=$_POST[jawaban_benar6];
	$jawaban7=$_POST[jawabannya6];
	if($benar7==$jawaban7){
		$nilai+=5;
	}
	$benar8=$_POST[jawaban_benar7];
	$jawaban8=$_POST[jawabannya7];
	if($benar8==$jawaban8){
		$nilai+=5;
	}
	$benar9=$_POST[jawaban_benar8];
	$jawaban9=$_POST[jawabannya8];
	if($benar9==$jawaban9){
		$nilai+=5;
	}
	$benar10=$_POST[jawaban_benar9];
	$jawaban10=$_POST[jawabannya9];
	if($benar10==$jawaban10){
		$nilai+=5;
	}
	
	$benar11=$_POST[jawaban_benar10];
	$jawaban11=$_POST[jawabannya10];
	if($benar11==$jawaban11){
		$nilai+=5;
	}
	
	$benar12=$_POST[jawaban_benar11];
	$jawaban12=$_POST[jawabannya11];
	if($benar12==$jawaban12){
		$nilai+=5;
	}
	
	$benar13=$_POST[jawaban_benar12];
	$jawaban13=$_POST[jawabannya12];
	if($benar13==$jawaban13){
		$nilai+=5;
	}
	
	$benar14=$_POST[jawaban_benar13];
	$jawaban14=$_POST[jawabannya13];
	if($benar14==$jawaban14){
		$nilai+=5;
	}
	
	$benar15=$_POST[jawaban_benar14];
	$jawaban15=$_POST[jawabannya14];
	if($benar15==$jawaban15){
		$nilai+=5;
	}
	
	$benar16=$_POST[jawaban_benar15];
	$jawaban16=$_POST[jawabannya15];
	if($benar16==$jawaban16){
		$nilai+=5;
	}
	
	$benar17=$_POST[jawaban_benar16];
	$jawaban17=$_POST[jawabannya16];
	if($benar17==$jawaban17){
		$nilai+=5;
	}
	
	$benar18=$_POST[jawaban_benar17];
	$jawaban18=$_POST[jawabannya17];
	if($benar18==$jawaban18){
		$nilai+=5;
	}
	
	$benar19=$_POST[jawaban_benar18];
	$jawaban19=$_POST[jawabannya18];
	if($benar19==$jawaban19){
		$nilai+=5;
	}
	
	$benar20=$_POST[jawaban_benar0];
	$jawaban20=$_POST[jawabannya0];
	if($benar20==$jawaban20){
		$nilai+=5;
	}
	mysql_query("INSERT INTO tnilai VALUES ('0','$Tanggal','$Id_matpel','$nilai','$NIS')");
?>

<body bgcolor="#999999">
	<center>Ulangan Anda telah kami proses.<br>
	Klik di sini untuk kembali ke <a href="media.php?page=home">home</a></center>
	
</body>