<!DOCTYPE html>
<html>
<head>
	<title>Project Database</title>
	<link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
<header class="Kepala">
	<nav>
		<div class="logo">
			<h1>Arkademy</h1>			
		</div>
		<div class="menu-atas">
			<label>Waktu Akses: 21 September 2019</label>
			<button>Logout</button>
		</div>
	</nav>
	<div class="konten">
		<div class="menu-kiri">
			<img src="unduhan.jpg">
			<br>
			<hr>
			<ul>
				<li><a href="database.php"><button><img src="pic/Control Panel.png"> Home</button></a></li><hr>
				<li><a href="data-pegawai.php"><button><img src="pic/Control Panel.png"> Data Karyawan</button></a></li><hr>
				<li><a href="data-pekerjaan.php"><button><img src="pic/Control Panel.png">Data Pekerjaan</button></a></li><hr>
				<li><a href="gaji-pegawai.php"><button><img src="pic/Chrome.png">Gaji Karyawan</button></a></li><hr>
			</ul>
		</div>
		<div class="menu-kanan">
			<h1>Add Pekerjaan</h1>
			<p>Selamat Datang Admin</p>
			<hr><br>
			<div class="form">
				<form action="add.php" method="post">
					<input type="text" name="nama" required placeholder="Nama"><br>
					<input type="text" name="nik" required placeholder="Salary"><br>
					<button name="save" type="submit">Save</button>
				</form>
				<?php
          				if(isset($_POST['save'])){
          					include 'koneksi.php';
          					$insert = mysqli_query($conn, "INSERT INTO login VALUES 
          						(NULL,
          							'".$_POST['nama']."',
          							'".$_POST['user']."',
          							'".$_POST['password']."')");
          					if ($insert) {
          						echo '<div class="alert alert-success alert-fill alert-close alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"></span>
          </button> Pendaftaran Akun Berhasil </div>';
          					}else{
          						echo "Daftar Gagal";
          					}
          				}
          			?>
			</div>	
		</div>
		</div>	
</header>
</body>
</html>