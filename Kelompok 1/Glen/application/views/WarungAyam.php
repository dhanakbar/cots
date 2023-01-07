<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css"/>
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/Keranjang.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<title>WarungAyam</title>
	</head>
	
    <body style="background-color:white;">
	<nav class="custom-navbar navbar-expand-xl">
		
		<img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:50px; width: 50px;">
				<a class="custom-navbar-brand  ml-auto " style="width: 69%;" href="Beranda">MenuMaster</a>
					<ul class="navbar-nav ml-3">
						<li class="nav-item">
							<a class="nav-link" href="Profil">Profil</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-3">
						<li class="nav-item">
							<?php $id = isset($_SESSION['id_pengguna']);?>
							<a class="nav-link" href="Keranjang/cek_keranjang/<?= $id?>">Keranjang</a>
						</li>
						
					</ul>
					<ul class="navbar-nav ml-3">
						<li class="nav-item">
							<a class="nav-link" href="About">About</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-3">
						<li class="nav-item">
							<a class="nav-link" href="Login/logout">Log out</a>
						</li>
					</ul>

        	</div>
		</nav>
        
        <header>
            <img src="<?= base_url()?>assets/img/slider/2.png" alt="bg makanan"
            style="width: 100vw; height: 410px; opacity: 1;">

        </header>

		<main class="container mt-5 mb-5" style="background-color:white;">
			<div class="row">
				<?php foreach ($produk as $produk): if($produk->jenis_produk == "Warungayam"){
					$_SESSION['jenisproduk'] = "Warungayam";
					?>
				<div class="col-lg-3">
					<img src="<?= base_url()?>assets/img/Warung Ayam/<?= $produk->foto_produk; ?>">
					<h4><?= $produk->nama_produk; ?></h4>
                    <h5>Rp. <?= $produk->harga_produk; ?> </h5><br><?php if(strlen($produk->nama_produk)<= 20){echo '<br><br>';}else{echo '<br>';}?>
					<a href="Keranjang/insertProduk/<?= $produk->id_produk;?>">
						<button style="background-color: #de0606; font-size: large; color: #ffffff;">BELI DIMARI BRO!!!</button>
					</a>
				</div>
				<?php } endforeach ?>
			</div>
		</main>
		
        
		<footer >
			<div class="containerFooter">
				<div class="logo">
					<img src="<?= base_url()?>assets/img/ikonFooter.png" style="height: 100px; width: 100px;">
					<h4>About MenuMaster</h4>
				</div>
				<div class="pembayaran">
					<h4>
						Payment supported by:
					</h4>
					<table>
						<tr>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoBRI.png" style="width: 80px; height: 65px;">
							</td>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoBCA.png">
							</td>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoBNI.png" style="width: 150px; height: 100px;">
							</td>
						</tr>
						<tr>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoMandiri.png">
							</td>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoDANA.png" style="width: 500px; height: 60px;">
							</td>
							<td>
								<img src="<?= base_url()?>assets/img/logoPembayaran/logoOVO.png">
							</td>
						</tr>
					</table>
				</div>
				<div class="mediaSosial">
					<h4>
						Follow us!
					</h4>
					<img src="<?= base_url()?>assets/img/logoInstagram.png">
					<img src="<?= base_url()?>assets/img/logoTwitter.png">
				</div>
			</div>
		</footer>

	</body>
</html>