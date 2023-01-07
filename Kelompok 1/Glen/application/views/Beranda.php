<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/Beranda.css" />

	<!-- Slick CSS untuk slide gambar di header -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<!-- CSS untuk jquery read more/less -->

	<title>Beranda</title>
</head>

<body>

	<nav>
		<img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:30px;width: 30px;">
		<h2>
			<ul><a
					href="Beranda">MenuMaster</a>
			</ul>
		</h2>

		<ul>
			<li><a href="Profil">Profil</a>
			</li>
			<?php $id = isset($_SESSION['id_pengguna']);?>
			<li><a href="Keranjang/cek_keranjang/<?= $id?>">Keranjang</a>
			</li>
			<li><a
					href="About">About</a>
			</li>
			<li><a
					href="Login/logout">Log out</a>
			</li>
		</ul>

		

		<script src="js/script.js"></script>

	</nav>

	<header>
		<div class="judulBanner">
			<div class="judul">
				<h3>
					MenuMaster
				</h3>
				<h6>
					Your Hunger Savior
				</h6>
			</div>
		</div>

		<form>
			<input class="search" type="text" placeholder="Search your dish here..." required>
			<input class="button" type="button" value="Search">
		</form>

		<div class="container">
			<div class="slider">
				<div>
					<a href="Warungayam">
						<img src="<?= base_url()?>assets/img/slider/2.png">
					</a>
				</div>
				<div>
					<a href="Warungwagyu">
						<img src="<?= base_url()?>assets/img/slider/3.png">
					</a>
				</div>
				<div>
					<a href="Warungjapansunda">
						<img src="<?= base_url()?>assets/img/slider/4.png">
					</a>
				</div>
			</div>
		</div>



		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Slick JS -->
		<script type="text/javascript"
			src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

		<script>
			$(document).ready(function () {
				$('.slider').slick({
					autoplay: true,
					autoplaySpeed: 2500,
					dots: true
				});
			});
		</script>

	</header>
	<main>
		<h2>Category</h2>
		<div class="container">
			<section class="services">
				<div class="service">
					<div class="icon">
						<a
							href="Makanan">
							<img src="<?= base_url()?>assets/img/kategori/kategoriFood.png">
						</a>
					</div>
					<h3>
						<ul><a href="Makanan">Food</a>
						</ul>
					</h3>
					<p>
						Feed your tummy with our tons of foods!
					</p>
				</div>
				<div class="service">
					<div class="icon">
						<a
							href="Minuman">
							<img src="<?= base_url()?>assets/img/kategori/kategoriDrink.png">
						</a>
					</div>
					<h3>
						<ul><a
								href="Minuman">Drink</a>
						</ul>
					</h3>
					<p>
						Enjoy our delicious drinks!
					</p>
				</div>
				<div class="service">
					<div class="icon">
						<a
							href="Side_dish">
							<img src="<?= base_url()?>assets/img/kategori/kategoriSideDish.png">
						</a>
					</div>
					<h3>
						<ul><a
								href="Side_dish">Side
								Dish</a></ul>
					</h3>
					<p>
						If you are not really hungry, please check me!
					</p>
				</div>
			</section>
		</div>

		<div class="palingLaku">
			<div class="pict">
				<img src="<?= base_url()?>assets/img/fire-chicken-1pc.jpg">
			</div>
			<div class="text">
				<H1>
					Best Seller
				</H1>
				<H4>
					On This Week!
				</H4>

				<div class="post">
					<h5>
						Fire Chicken from Richeese Factory. Ayam krispi berbalut saus pedas yang pastinya
					</h5>
					<span class="dots">...</span>
					<span class="more">
						bikin nagih! Dapatkan segera sebelum kehabisan!<br>
						Hanya Rp30.000	
					</span>
					<button class="read">read more
					</button>
				</div>
	
				<script>
					$(document).ready(function(){
						$(".read").click(function(){
							$(this).siblings('.dots').toggle();
							$(this).siblings('.more').toggle();
							if($(this).text()=='read less'){
								$(this).text('read more');
							}
							else{
								$(this).text('read less');
							}
						});
					});
				</script>
				
				<input class="buy" type="button" value="buy now">
			</div>
			
		</div>
	</main>

	<footer>
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