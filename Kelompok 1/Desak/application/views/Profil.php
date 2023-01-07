<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css"/>
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>/assets/css/Register.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Profil</title>
</head>
<body style="background-color:#e62626 ;">
	<nav class="custom-navbar navbar navbar-expand-lg ">
		<img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:50px;width: 50px;">
		
        <div class="container">
            <a class="custom-navbar-brand" href="Beranda">MenuMaster</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Keranjang">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login/logout">Log out</a>
                    </li>
                </ul>
        </div>
    </nav>	
	<main class="container custom-main">
		
		<div class="box">
			<form class="form" id="form" action="<?php base_url()?>Profil/UpdatePass/<?= $_SESSION['id_pengguna'];?>" method="post">
				<?php if (!empty($this->session->flashdata('flash'))) : ?>
					<div class="row mt-3">
						<div class="col-md-12">
							<div class="alert alert-custom alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('flash'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
                <h2>Profil</h2>
                <?php foreach ($akun as $user):  if($user->id_pengguna == $_SESSION['id_pengguna']){?>
					
					
                <div class="form-group">
                    <label >Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $user->nama;?>" disabled >
                </div>
                <div class="form-group">
                    <label >username</label>
                    <input type="text" name="username" class="form-control" value="<?= $user->username;?>"disabled>
                </div>
                <div class="form-group">
                    <label >password</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <button type="submit" class="alert alert-custom">Ubah</button>
                <?php } endforeach ?>
            </form>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" scr="jquary-3.2.1.min.js" ></script>
	
</body>
</html>