<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css"/>
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/About.css"/>
		<title>About</title>
	</head>
	
	<body>
		<nav>
			<img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:30px;width: 30px;">
			<h2>
				<ul><a
						href="<?php base_url()?>Beranda">MenuMaster</a>
				</ul>
			</h2>
	
			<ul>
				<li><a href="Profil">Profil</a>
				</li>
				<li><a href="<?php base_url()?>Keranjang/cek_keranjang/<?= isset($_SESSION['id_pengguna']);?>">Keranjang</a>
				</li>
				<li><a
						href="<?php base_url()?>About">About</a>
				</li>
				<li><a
						href="<?php base_url()?>Login">Log out</a>
				</li>
			</ul>
	
			
	
			<script src="script.js"></script>
	
		</nav>

		<header>
			<h1>Tentang Kami</h1>
		</header>

        <main>
			<h3></h3>
			<p>Menu Master adalah sebuah aplikasi e-commerce yang penyedia makanan dan minuman yang bervariasi </p>
			
		</main>

		<footer>
			<br>
			<br>
			<h2>Sponsored by : </h2>
			<img height="400" width="100%"  src="<?= base_url()?>assets/img/Logo Rechess.png">
		</footer>

	</body>
</html>