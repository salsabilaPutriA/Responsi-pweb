<html>
	<head>
		<title>Tempat Nongkrong</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">JCO </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Pemesan</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Pesan Makanan</td>
						<td>
						<select name="makanan" id="makanan">
							<option>Oreology</option>
							<option>Sugar Ice</option>
							<option>Mona Pisa</option>
							<option>Black Jack</option>
							<option>Coco Loco</option>
							<option>Snow White</option>
						</select>	
					   </td>
					</tr>

					<tr>
						<td>Jumlah</td>
						<td>
							<select name="Jumlah" id="Jumlah">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>Lebih</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Pesan Minuman</td>
						<td>
						<select name="minuman" id="minuman">
						<option>Hot Chocolate</option>
						<option>Choco Forest</option>
						<option>Oreo Frappe</option>
						<option>Hot tea</option>
						<option>Americano</option>
						<option>Iced Chocolate</option>
					   </select>
				    </td>
				</tr>

				<tr>
					    <td>Jumlah</td>
					    <td>
					    	<select name="Jumlah2" id="Jumlah2">
					    	   <option>1</option>
					    	   <option>2</option>
					    	   <option>3</option>
					    	   <option>4</option>	
					    	   <option>Lebih</option>	
					    	</select>			    
					    </td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="Komentar" id="Komentar"></textarea></td> </textarea>
                    </tr>

                    <tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Orderan::
		</a></strong></div>
	</body>
</html>