 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Menampilkan Data Mahasiswa</title>
 </head>
 <body>
 	<h1 style="font-family: serif; background-color: darkmagenta;">Menampilkan Data Mahasiswa</h1>
 	<button style="background-color: sno; margin-bottom: 6px;"><a href ="formdata.php">Tambah</a></button>
 	<table border="1">
 		<tr bgcolor="white">
 			<th bgcolor="darklateblue">No</th>
 			<th>Nim</th>
 			<th bgcolor="darklateblue">Nama</th>
 			<th>Jenis kelamin</th>
            <th bgcolor="darklateblue">uang jajan</th>

 			<th>Opsi</th>
 		</tr>
 		<?php
 			include"koneksi.php";

 			$no =1;
 			$data= mysqli_query($koneksi,"SELECT * FROM uas_202055202050");
 			while ($hasil= mysqli_fetch_array($data)) {
 				?>
 			<tr>
 				<td bgcolor="darklateblue"><?php echo $no++; ?></td>
 				<td><?php echo $hasil['nim'] ; ?></td>
 				<td bgcolor="darklateblue"><?php echo $hasil['nama'] ; ?></td>
 				<td><?php echo $hasil['jenis_kelamin'] ; ?></td>
                <td bgcolor="darklateblue"><?php echo $hasil['uang_jajan'] ; ?></td>
 				<td>
 					<a href="ubahdata.php?id=<?php echo$hasil['nim'] ?>"> Ubah </a> ||
 					<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="hapusdata.php?id=<?php echo$hasil['nim'] ?>"> Hapus </a>
 			</tr>
 			<?php
 			}
 		?>
 	</table>
 </body>
 