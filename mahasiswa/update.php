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

		$sql= 'UPDATE students SET id=?,nama=?,nim=?,jurusan=? WHERE id=?';
        $row = $koneksi->prepare($sql);
		$row->execute($data);
    
        // Redirect to homepage to display updated user in list
		echo '<script>alert("Berhasil Edit Data");window.location="index.php"</script>';
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM students WHERE id= ?";
	$row = $koneksi->prepare($sql);
	$row->execute(array($id));
	$hasil = $row->fetch();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Data <?php echo $hasil['nama'];?></title>
	</head>
	<body>
			 <h3>Edit Data - <?php echo $hasil['nama'];?></h3>

					 <form action="" method="POST">
							 <label>Id</label><br>
							 <input type="number" value="<?php echo $hasil['id'];?>" name="id" id="id"><br><br>
	
							 <label>Nama Mahasiswa</label><br>
							 <input type="text" value="<?php echo $hasil['nama'];?>" name="nama" id="nama"><br><br>
	
							 <label>Nim</label><br>
							 <input type="number" value="<?php echo $hasil['nim'];?>" name="nim" id="nim"><br><br>

                             <label>Jurusan</label><br>
							 <input type="text" value="<?php echo $hasil['jurusan'];?>" name="jurusan" id="jurusan"><br><br>
	
						 <input type="hidden" value="<?php echo $hasil['id'];?>" name="id">
						 <button name="Daftar">Update</button>
					 </form>
	</body>
</html>