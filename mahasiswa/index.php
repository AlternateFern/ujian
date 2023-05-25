<?php
require_once ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
				 <br/>
					 <?php
						$sql = "SELECT * FROM students";
						$row = $koneksi->prepare($sql);
						$row->execute();
						$hasil = $row->fetchAll();
						$a =1;
						foreach($hasil as $isi){

						echo $isi['id'] . "<br />" ;
						echo $isi['nama'] . "<br />" ;
						echo $isi['nim'] . "<br />" ;
                        echo $isi['jurusan'] . "<br />" ;?>

							<a href="update.php?id=<?php echo $isi['id'];?>">Edit</a>
							<span class="fa fa-edit"></span></a>
							<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="delete.php?id=<?php echo $isi['id'];?>">Hapus</a><br><br>

					<?php
						$a++;
						}
					?>

                    <a href="create.php">Tambah</a>
</body>
</html>