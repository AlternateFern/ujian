<?php
require_once('conn.php');

	if(!empty($_POST['id'])){
        $id = $_POST['id'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
		
        $data[] = $id;
		$data[] = $nama;
		$data[] = $nim;
        $data[] = $jurusan;
		
		// simpan data barang
		
		$sql = 'INSERT INTO students (id,nama,nim,jurusan)VALUES (?,?,?,?)';
		$row = $koneksi->prepare($sql);
		$row->execute($data);
		
		// redirect
		echo '<script>alert("Berhasil Tambah Data");window.location="index.php"</script>';
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Create</title>
	</head>
	<body>
			 <br/>
			 <h3>Isi Biodata Mahasiswa</h3>
			 <br/>
					 <form action="" method="POST">
							 <label>Id Mahasiswa</label><br>
							 <input type="number" value="" name="id" id="id">
                                <br>
							 <label>Nama Mahasiswa</label><br>
							 <input type="text" value="" name="nama" id="nama">
                                <br>
							 <label>Nim</label><br>
							 <input type="number" value="" name="nim" id="nim">
                                <br>
							 <label>Jurusan</label><br>
							 <input type="text" value="" name="jurusan" id="jurusan">
                                <br>
						 <button name="daftar">Daftar</button>
					 </form>

	    </body>
    </html>