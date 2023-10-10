<?
$page=$_GET[page];
$save=$_GET[save];
$act=$_GET[act];


if ($page='surat' AND $save=='ok'){
$tgl=date('Ymd');
     if(empty($_POST[judul]) or empty($_POST[format])){
	 echo"<script>alert('Maaf, Data Anda Belum Lengkap !');window.location='?page=download'</script>";
	 }else{
	//untuk memindahkan file ke tempat uploadan
	$upload_path = "../files/";
	// handle aplikasi : apabila folder yang dimaksud tidak ada, maka akan dibuat
	if (!is_dir($upload_path)){
		mkdir($upload_path);
		opendir($upload_path);
	}
	$file = $_FILES['fupload']['name'];
	$tmp  = $_FILES['fupload']['tmp_name'];	
	move_uploaded_file($tmp, $upload_path.$file);	
	$sql=mysql_query("INSERT INTO download(judul,nama_file,format_file,tgl_posting) 
	VALUES('$_POST[judul]','$file','$_POST[format]','$tgl')");
	}
	?>
<div style=\"font-size:14px;color:red\"><img src='images/loading.gif' width='400' height='50'><h3>Pelase Wait ...</h3></div>		
<?			
		if($sql){
		
		?>  <br><br><center>
			<meta http-equiv='refresh' content='2;URL='>
			
			</center>
			<?
			echo "<script>alert('Data Sukses Disimpan !');javascript:history.go(-1) </script>";

		} else {
			$error = "<div style=\"font-size:14px;color:red\">Data Gagal Disimpan</div>";?>
			
			<meta http-equiv='refresh' content='2;URL='><?
		}
			//echo "<script>window.location = '?page=formulir'</script>";
}else{
?>
<div class="content_title_01"><img src='images/registrasi.png' width='25' height='25'> <h3>&#187; Entry Materi </div>
<form method="post" action="proses_upload_surat.php" enctype='multipart/form-data' onSubmit="return validasi(this)">
<table>
<div>
<tr>
  <td> Mata Pelajaran </td>
  <td><input name='nomor' type='text' id="nomor" size='50'></td></tr>  
   <tr>
  <td> Keterangan </td>
  <td><input name='keterangan' type='text' id="keterangan" size='50'></td></tr>		
<tr><td>File</td><td><input name='datafile' type='file' id="datafile"></td></tr>
<td></td>
<td><br><button type="submit" name="submit" ><img src="images/simpan.png" width='20' height='20' /> Save</button>
 <button type="reset" name="reset" ><img src="images/prev.gif" width='20' height='20' /> Clear</button></td>
</tr>
</table>  
</div>	
</form>
			
                    
            

<?}?>
