<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif;
font-size: 14px;}
-->
</style>
<h2 align="center">Download Materi </h2>
<div id='judul_kontent'></div>
<table id='theList' border=0 width='100%'>
<tr><th width="3%" bgcolor="#CCCCCC">No.</th>
<th width="14%" bgcolor="#CCCCCC">Mata Pelajaran </th>
<th width="8%" bgcolor="#CCCCCC">Keterangan</th>
<th width="6%" bgcolor="#CCCCCC">Tanggal Upload</th>
<th bgcolor="#CCCCCC">Download</th>
</tr>
<?php
$sql = mysql_query("select * from tabel_data order by id asc");
$no=1;
while($r = mysql_fetch_array($sql)){

?>
<tr>

<td height="58" align='center' class='td'><p align='center'><span class='style1'><?echo$no;?></span></p></td>
<td class='td'><p align='center'><span class='style1'><?echo$r[judul];?></span></p></td>
<td class='td'><p align='center'><span class='style1'><?echo$r[kategori];?></span></p></td>

<td class='td'><p align='center'><span class='style1'><?echo$r[tgl_upload];?></span></p></td>

<td class='td' align='center' width='14%'><a href="<?=$r['url'];?>"><img src="download.png" width="132" height="51" border="0"/></a> </td>
</tr>
<?
$no++;
}
?>
</table>

<p>
  <?
if($_GET[page]=='registrasi' and $_GET[act]=='delete'){
$sql=mysql_query("delete from acount where id_acount='$_GET[id]'");
echo"<script>window.location.href='?page=registrasi'</script>";
}

?>
</p>
<p><a href="cetak.php"></a></p>
