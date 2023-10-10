<?php
	include "fungsi/koneksi.php";
?>
<body>
<h2><center>Ujian Online</center></h2><br>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
  <center><table width="385" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td width="109">NIS</td>
      <td width="261"><input type="text" name="nis" id="nis"></td>
    </tr>
	
    <tr>
      <td>Kelas</td>
      <td><select name="kelas" id="kelas">
	  	<?php
			$kelasnya=mysql_query("SELECT * FROM tkelas");
			while($row1=mysql_fetch_array($kelasnya)){
				echo "<option value=\"$row1[IdKelas]\">$row1[Kelas]</option>";
		}
		?>
		
	  </select></td>
    </tr>
    <tr>
      <td>Mata Pelajaran </td>
      <td><select name="matpel" id="matpel">
	  	<?php
			$matpelnya=mysql_query("SELECT * FROM tmatpel");
			while($row2=mysql_fetch_array($matpelnya)){
				echo "<option value=\"$row2[IdMatPel]\">$row2[Matpel]</option>";
		}
		?>
	  </select></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td><input type="text" name="tanggal_ulangan" id="tanggal_ulangan" value="<?php echo date("d-m-Y");?>">&nbsp; ex: 01-01-2010</td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="submit" value="Proses">&nbsp;
	  <input type="button" value="Batal" onClick="self.history.back()"></center></td>
    </tr>
  </table></center>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
	if((isset($_POST['submit'])) AND ($_POST['matpel'] <> "")){
		$kelas=$_POST[kelas];
		$matpel=$_POST[matpel];
		$kelas=$_POST[kelas];
		$nis=$_POST[nis];
		$tanggal_ulangan=$_POST[tanggal_ulangan];
		$sql=mysql_query("SELECT * FROM tsoal WHERE IdMatPel='$matpel' ORDER BY RAND() LIMIT 0,20");
		//$ketemu=mysql_num_rows($query);
		
		?>
	<form method="post" action="cekJawaban.php">	
	<input type=hidden name="id_matpel" value="<?php echo $matpel;?>">
						<input type=hidden name="nis_ujian" value="<?php echo $_POST[nis];?>">
						<input type=hidden name="tanggal_ulangan" value="<?php echo $_POST[tanggal_ulangan];?>">
	<center><table id="tabel_soal" border="1">
		<th>No.</th><th>Soal</th><th>Pilihan Jawaban</th><th>Jawaban</th>
	<?php
	
		$no=1;
		$nox=0;
			while($show=mysql_fetch_array($sql)){ ?>
				<tr>
						<td><?php $no ?></td>
						<td><input type=hidden name="id_soal<?php  $nox?>" id=id_soal value='<?php echo $show[IdSoal];?>'><textarea name=soal cols=40 rows=6 readonly><?php echo $show[Pertanyaan];?></textarea></td>
						<td><input type=hidden name=jawabanA id=jawabanA value=A>A. <?php echo $show[JawabanA];?><br>
							<input type=hidden name=jawabanB id=jawabanB value=B>B. <?php echo $show[JawabanB];?><br>
							<input type=hidden name=jawabanC id=jawabanC value=C>C. <?php echo $show[JawabanC];?><br>
							<input type=hidden name=jawabanD id=jawabanD value=D>D. <?php echo $show[JawabanD];?><br>
						</td>
						<td><input type=text name="jawabannya<?php echo $nox;?>" id="jawabannya<?php echo $nox;?>" size=5><input type=hidden id="jawaban_benar<?php echo $nox;?>" name="jawaban_benar<?php echo $nox;?>"  value='<?php echo $show[Jawaban];?>'></td>
				</tr>
			<?php	$nox++;
				$no++;
			}	
	?>	
	<td colspan="4"><center><input type="submit" value="Proses" name="submit"> &nbsp; <input type="button" value="Batal" onClick="self.history.back()"></center></td>
	</table></center>	
</form>
<?php
	}
?>
</body>