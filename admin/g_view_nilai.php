<body>
	<h2><center>Daftar Nilai</center></h2>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<center><table>
			<tr>
				<td>Tanggal Ujian</td>
				<td><input type=text name=tanggal></td>
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
		<tr><th>Id Nilai</th><th>NIS</th><th>Tanggal Ujian</th><th>Nilai</th><th>Aksi</th></tr>
		<?php
		if(isset($_POST[submit])){
			$query=mysql_query("SELECT * FROM tnilai WHERE tanggal_ujian='$_POST[tanggal]' AND IdMatPel='$_POST[matpel]'");
			while($row=mysql_fetch_array($query)){
				echo "<tr>
							<td>$row[IdNilai]</td>
							<td>$row[NIS]</td>
							<td>$row[tanggal_ujian]</td>
							<td>$row[Nilai]</td>
							<td>
								<a href=aksi.php?link=nilai&act=edit&id=$row[IdNilai]>Edit</a> | 
								<a href=aksi.php?link=nilai&act=hapus&id=$row[IdNilai]>Hapus</a>
							</td>
				</tr>";
			}	
		}
		?>
	</table></center><br>
	<center><input type=button value=Batal onCLick="self.history.back()"></center>
</body>