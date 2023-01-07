<!DOCTYPE html>
<html>
    <head>
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css"/>
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/Keranjang.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" >
	
	<title>Keranjang</title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<nav class="custom-navbar navbar-expand-xl">
		
		<img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:50px; width: 50px;">
				<a class="custom-navbar-brand  ml-auto " style="width: 69%;" href="Beranda">MenuMaster</a>
					<ul class="navbar-nav ml-3">
						<li class="nav-item">
							<a class="nav-link" href="Keranjang">Keranjang</a>
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
			<h1>Keranjang</h1>
			<h3>Yuk Checkout Segera </h3>

		</header>
		<div class="container custom-main mt-5">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead style="text-align: center;" >
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Action</th>
					</thead>
					<tbody style="text-align: center;">

						<?php 
							$no=0;
								foreach($penyimanan as $store) :
									if($store->id_pengguna == $_SESSION['id_pengguna']){
										$id_produk = $store->id_produk;

										foreach($produk as $barang):
											if($barang->id_produk == $id_produk){
												$subharga = $barang->harga_produk;
												$jumlah = 1;
												$no++;		
						?>	
						<tr >
							<td><?= $no; ?></td>
							<td><?= $barang->nama_produk; ?></td>
							<td>Rp. <?= $barang->harga_produk; ?></td>
							<td><?= $jumlah; ?></td>
							<td>Rp. <?= number_format($subharga); ?></td>
							
							<td><a  href="Keranjang/deleteProduk/<?= $barang->id_produk;?>"><button class=" btn btn-danger  mr-2">Hapus</button></a><button class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">Checkout</button></a></td>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<span><?= $barang->nama_produk; ?></span><br>
									<span>Rp. <?= $barang->harga_produk; ?></span>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#infoPembayaran">Bayar</button>
								</div>
								</div>
							</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="infoPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Terima kasih telah berbelanja di platform kami
								</div>
								<div class="modal-footer">
									<a  href="Keranjang/checkoutProduk/<?= $barang->id_produk;?>">
										<button type="button" class="btn btn-secondary">Close</button></a>
									<a  href="Keranjang/checkoutProduk/<?= $barang->id_produk;?>">
										<button type="button" class="btn btn-primary" >yups</button></a>
								</div>
								</div>
							</div>
							</div>

							<?php }endforeach?>
							<?php }
							endforeach;
							if ($no < 1){
								echo "<script> alert('Belum ada Produk yang ditambahkan ke keranjang!!!');</script>";
								redirect(base_url('Beranda'),'refresh');
							}?>
						</tr>
					</tbody>
				</table>
				<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
				<script scr="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
				<script scr="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"><script>
				<script>
					$(document).ready(function () {
						$('#example').DataTable();
					});
				</script>
			</div>
		</div>
		
		<script type="text/javascript" src="js/data.js"></script>
	

	</body>
		
		
</html>