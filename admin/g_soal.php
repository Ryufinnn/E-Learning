<?php
	include "fungsi/koneksi.php";
?>
<body>
<h2><center>Input Data Soal</center></h2><br>
<form method="post" action="aksijuga.php?link=soal&act=input">
  <center><table width="461" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td width="165">NIP</td>
      <td width="281"><input type="text" name="nip"></td>
    </tr>
    <tr>
      <td>Mata Pelajaran </td>
      <td><select name="matpel">
	  	<?php
			$matpelnya=mysql_query("SELECT * FROM tmatpel");
			while($row2=mysql_fetch_array($matpelnya)){
				echo "<option value=\"$row2[IdMatPel]\">$row2[Matpel]</option>";
		}
		?>
	  </select></td>
    </tr>
	<tr>
		<td>Soal</td>
		<td><textarea name="input_soal" cols="40" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>Jawaban A</td>
		<td><input type="text" name="jawaban_A" size="32"></td>
	</tr>
	<tr>
		<td>Jawaban B</td>
		<td><input type="text" name="jawaban_B" size="32"></td>
	</tr>
	<tr>
		<td>Jawaban C</td>
		<td><input type="text" name="jawaban_C" size="32"></td>
	</tr>
	<tr>
		<td>Jawaban D</td>
		<td><input type="text" name="jawaban_D" size="32"></td>
	</tr>
	<tr>
		<td>Jawaban Benar</td>
		<td><input type="text" name="jawaban_benar" size="32"></td>
	</tr>
    <tr>
      <td colspan="2"><center><input type="submit" name="submit" value="Proses">&nbsp;
	  <input type="button" value="Batal" onClick="self.history.back()"></center></td>
    </tr>
  </table></center>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>