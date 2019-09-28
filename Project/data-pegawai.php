<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="pegawai.css">
</head>
<body>
<header class="Kepala">
	<nav>
		<div class="logo">
			<h1>Arkademy</h1>			
		</div>
		<div class="menu-atas">
			<label>Waktu Akses: 21 September 2019</label>
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
			<h1>Admin</h1>
			<p>Selamat Datang Admin</p>
			<hr><br>	
			<div class="data-a">
				<h3>Data Karyawan</h3>
				<div class="atas-a">
					<a href="add.php"><button>+Add</button></a>
				</div>
				<table class="isi-data">
					<thead>
						<tr>
							<th>Nama</th>
							<th>J/K</th>
							<th>NIK</th>
							<th>Alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Bintang</td>
							<td>Laki-laki</td>
							<td>0360303244498</td>
							<td>Jl.printis, N0 12/15 cikokol</td>
							<td><a href="edit.php">Edit</a>/<a href="hapus.php">Hapus</a></td>
						</tr>
						<tr>
							<td>Tasya</td>
							<td>Perempuan</td>
							<td>0360303246786</td>
							<td>Jl.imam bonjol, N0 11/07 kroncong</td>
							<td><a href="edit.php">Edit</a>/<a href="hapus.php">Hapus</a></td>
						</tr>
					</tbody>
				</table>
				<hr>
			</div>
			
			
			</div>
		</div>
</header>
</body>
</html>