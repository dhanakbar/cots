<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/basic.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/Beranda.css" />
    <title>MINUMAN</title>
    <style>
        img {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <img src="<?= base_url()?>assets/img/logoMenuMaster.png" style="height:30px;width: 30px;" alt="">
        <h2>
            <ul>
                <a href="Beranda">MenuMaster</a>
            </ul>
        </h2>

        <ul>
            <li><a href="Profil">Profil</a>
			</li>
            <li><a href="Keranjang">Keranjang</a>
            </li>
            <li><a href="About">About</a>
            </li>
            <li><a href="Login/logout">Log out</a>
            </li>
        </ul>

    </nav>

    <br><br>
    <div>
        <header>
            <img src="<?= base_url()?>assets/img/bg-header-minuman.jpg" alt="bg makanan"
                style="width: 100vw; height: 410px; opacity: 0.5;">
            <div
                style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); bottom: 50%; 
                -webkit-text-stroke: 1px black; font-family: comic 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Minuman
            </div>
        </header>
    </div>

    <!-- Cards -->
    <div class="row text-center" style="margin: 15px; display: flex">
        <div class="card col" style="width: 18rem; margin: 15px;">
            <img src="<?= base_url()?>assets/img/minuman1.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Jus Buah - Juice Mel</h5>
                <p class="card-text" id="harga" hidden >Rp. 12000</p>
                <p class="card-text">Jus dengan berbagai macam rasa buah</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>

        <div class="card col" style="width: 18rem; margin: 15px;">
            <img src="<?= base_url()?>assets/img/minuman2.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Smoothie - Drink Nih!</h5>
                <p class="card-text" id="harga" hidden >Rp. 14000</p>
                <p class="card-text">Smoothie dengan berbagai macam rasa</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>

        <div class="card col" style="width: 18rem; margin: 15px;">
            <img src="<?= base_url()?>assets/img/minuman3.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Teh - Cafe Indah</h5>
                <p class="card-text" id="harga" hidden >Rp. 8000</p>
                <p class="card-text">Teh hangat atau es teh manis</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>
    </div>

    <div class="row text-center" style="margin: 15px; display: flex">
        <div class="card col" style="width: 18rem; margin: 15px;">
            <img src="<?= base_url()?>assets/img/minuman4.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Lemon Tea - Santuy Yuk</h5>
                <p class="card-text" id="harga" hidden >Rp. 10000</p>
                <p class="card-text">Teh dengan campuran lemon</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>

        <div class="card col" style="width: 18rem; margin: 15px; float: right;">
            <img src="<?= base_url()?>assets/img/minuman5.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Root Beer - Mantap Jiwa</h5>
                <p class="card-text" id="harga" hidden >Rp. 25000</p>
                <p class="card-text">Minuman para lelaki jerman</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>

        <div class="card col" style="width: 18rem; margin: 15px; float: right;">
            <img src="<?= base_url()?>assets/img/minuman6.jpg" class="card-img-top" alt="nasgor" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title" id="judulmenu">Milkshake - Kopi Dulu</h5>
                <p class="card-text" id="harga" hidden >Rp. 28000</p>
                <p class="card-text">Milkshake dengan berbagai macam rasa!</p>
                <a type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal">Beli!</a>
            </div>
        </div>
    </div>
    <!-- End Cards -->

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
                    <h4 class="modal-title" id="jdlmenu"></h4>
                    <h5 class="modal-title" id="hrgmodal"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#infoPembayaran">Bayar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
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
					<button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal">Close</button>
					<button type="button" class="btn btn-primary"  data-dismiss="modal" data-toggle="modal">yups</button>
				</div>
			</div>
		</div>
    </div>
    <!-- End Modal -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','.edit',function(){
                var judul = $('#judulmenu').text();
                var harga = $('#harga').text();
                $('#exampleModal').modal('show');
                $('#jdlmenu').text(judul);
                $('#hrgmodal').text(harga);
            })
        })
    
    </script>
</body>

</html>