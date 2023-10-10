<body>
	<h2><center>Daftar Soal</center></h2>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<center><table>
			<tr>
				<td>NIP</td>
				<td><input type=text name=nip></td>
			</tr>
			<tr>
				<td>MatPel</td>
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
				<td><input type=submit name=submit value=View></td>
			</tr>
		</table></center><br>
	</form>	
	<center><table width="800" border="1">
		<tr><th>Soal</th><th>Jawaban A</th><th>Jawaban B</th><th>Jawaban C</th><th>Jawaban D</th><th>Jawaban benar</th><th>Aksi</th></tr>
		<?php
		if(isset($_POST[submit])){
			$query=mysql_query("SELECT * FROM tsoal ");
			while($row=mysql_fetch_array($query)){
				echo "<tr>
							
							<td>$row[Pertanyaan]</td>
							<td>$row[JawabanA]</td>
							<td>$row[JawabanB]</td>
							<td>$row[JawabanC]</td>
							<td>$row[JawabanD]</td>
							<td>$row[Jawaban]</td>
							<td>
								<a href=aksijuga.php?link=soal&act=hapus&id=$row[IdSoal]>Hapus</a>
							</td>
				</tr>";
			}	
		}
		?>
	</table></center><br>
	<center><input type=button value=Batal onCLick="self.history.back()"></center>
</body>