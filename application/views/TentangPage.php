<!DOCTYPE html>
<html>
    <head>
        <title>MedStory | Tentang</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css"/>
        <style>
			.thumb-wrapper {
				padding: 10px;
				background: #fff;
				width:250px;
				border-radius: 6px;
				text-align: center;
				position: relative;
				box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			}
			.img-box {
				height: 120px;
				width: 100%;
				position: relative;
			}
			.item img {	
				display: inline-block;
				position: absolute;
				bottom: 0;
				margin: 0 auto;
				left: 0;
				right: 0;
			}
			.rating {
				border: none;
				margin-right: 49px
			}

			.myratings {
				font-size: 85px;
				color: green
			}

			.rating>[id^="star"] {
				display: none;
			}

			.rating>label:before {
				margin-left: 20px;
					width: 20px;
				font-size: 25px;
				font-family: FontAwesome;
				display: inline-block;
				content: "\f005"
			}

			.rating>.half:before {
				content: "\f089";
				position: absolute
			}

			.rating>label {
				color: #ddd;
				float: right;
			}

			.rating>[id^="star"]:checked~label,
			.rating:not(:checked)>label:hover,
			.rating:not(:checked)>label:hover~label {
				color: #FFD700
			}

			.rating>[id^="star"]:checked+label:hover,
			.rating>[id^="star"]:checked~label:hover,
			.rating>label:hover~[id^="star"]:checked~label,
			.rating>[id^="star"]:checked~label:hover~label {
				color: #FFED85
			}

			.reset-option {
				display: none
			}

			.reset-button {
				margin: 6px 12px;
				background-color: rgb(255, 255, 255);
				text-transform: uppercase
			}
		</style>
    </head>

    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="smartDoc">SmartDoc</a></li>
                <li><a href="history">Forum</a></li>
                <li><a href="dataKu">Dataku</a></li>
				<li><a href="nomorDarurat">Darurat</a></li>
                <li style="float:right"><button type="submit" class='btn btn-danger' data-toggle="modal" data-target="#signOutModal" style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></li>
                <li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
                <div id="ddParent">
                    <button id="dropbutton"><img width="30" src="assets/Setting.png"></button>
					<!--DropDown menu navigation-->
					<div id="dropdown-content">
						<a href="tentang">Tentang</a>
						<a href="kebijakan">Kebijakan & Privasi</a>
                	</div>
				</div>
            </ul>
        </div>
        
		<!--Content.-->
		<main>
		<br><br><br>
		<h2 style="margin-left: 16%; font-size:20px;">Pengaturan >> Tentang</h2>
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
			<h1 style="text-align: center;">MedStory</h1>
			<p style="text-align: center;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>Fitur yang tersedia :</p>
			<p>- Berdiskusi dalam forum kesehatan</p>
			<p>- Mendapatkan informasi dan tips kesehatan</p>
			<p>- Menghitung kebutuhan dan pemenuhan kalori harian</p>
			<p>- Memantau tumbuh kembang balita dengan KMS</p>
			<p>- Menghitung berat badan ideal</p>
			<p>- Mencari dokter dan fasilitas kesehatan</p>
			<p>- Informasi seputar Covid-19</p>
			<p>Versi : <span >2.0</span></p>
      	<br>
		</div>

		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
			<div class='row'>
				<div class='col-md-6 border-right'>
					<h5 style="text-align: center; color:#696969;">Review</h5>	
					<div class='container' style='margin-left:25%;'>	
						<!--User review form.-->
						<form method='POST' action='tentang/insertReview' >					
							<div class='thumb-wrapper'>
								<div class='row'>
									<fieldset class="rating"> 
										<input type="radio" id="star5" name="rating" value="5" />
										<label class="full" for="star5" title="Sempurna - 5 stars"></label> 

										<input type="radio" id="star4" name="rating" value="4" />
										<label class="full" for="star4" title="Cukup bagus - 4 stars"></label> 
										
										<input type="radio" id="star3" name="rating" value="3" />
										<label class="full" for="star3" title="Lumayan - 3 stars"></label> 
										
										<input type="radio" id="star2" name="rating" value="2" />
										<label class="full" for="star2" title="Buruk - 2 stars"></label> 
										
										<input type="radio" id="star1" name="rating" value="1" />
										<label class="full" for="star1" title="Sangat Buruk - 1 star"></label> 
										
										<input type="radio" class="reset-option" name="rating" value="reset" /> 
									</fieldset>
								</div>
								<div class='img-box'>		
									<img src="http://localhost/MedStory/assets/uploads/user_<?php foreach ($dataUser as $data){echo $data['namaPengguna'];} ?>.jpg" alt="Admin" 
										class="rounded-circle img-fluid" style="top:4px; height:100px; width:100px;">			
								</div>
								<div class='thumb-content'>
									<textarea rows="5" cols="28" name="review" style="background:#f4f4f4; border-width: 0 0 3px; border-radius:4px; 
									border-bottom: 3.5px solid #4183D7; color:#212121;">Masukan review...</textarea><br>						
									<p style='font-size:11px; float:right;'><?php echo date("Y/m/d h:i:s"); ?></p>
									<h5 style='font-size:13px; float:left; color:#212121;'>by : <?php foreach ($dataUser as $data){echo $data['namaPengguna'];} ?></h5>
									<br>
								</div>						
								
							</div>
							<br>		
							<div class='container-fluid' style='width:80%; margin-left:-20px;'>
								<p style="color: #4183D7; font-size: 12px;"><i class='fa fa-info-circle'></i> Hasil review akan dilihat oleh publik.</p>
							</div>
							<button class='btn btn-success' style='margin-top:10px;'>Kirim Review <i class="fa fa-send-o mr-2"></i></button>
						</form>
					</div>
				</div>

				<div class='col-md-6'>
					<h5 style="text-align: center; color:#696969;">Masukan & Saran</h5>
					<div class='container'>	
						<!--User feedback form.-->
						<form method='POST' action='landing/insertMasukkan' >					
							<p style='color:white; margin-bottom:5px;'>Kritik & Saran</p>
								<textarea required rows="5" cols="60" name="sarankritik" style="background:#f4f4f4; border-width: 0 0 3px; 
									border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px; margin-left-right:10px; width:80%; border-radius:4px; font-size:14px;"
									>Masukkan kritik dan saran Anda...</textarea><br>
							<div class='row'>
								<div class='col-md-6' style='max-width:300px;'>
									<input required disabled type="name" class="form-control" name="nama" style="background:#f4f4f4; border-width: 0 0 3px; 
									border-bottom: 3.5px solid #4183D7; color:#212121; margin-left-right:10px;"
									placeholder='nama lengkap / nama panggilan / inisial' value='<?= $data = $this->session->userdata('userTrack'); ?>'>
								</div>
								<div class='col-md-6'>
									<button class='btn btn-success'>Kirim Saran <i class="fa fa-send-o mr-2"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<br>
		</div>
		<br>
		
		<!--Footer.-->
	<footer class="text-center text-lg-start bg-light text-muted">
		<section style="background-color: #4183D7; padding-top: 3px;">
		<div class="container text-center text-md-start mt-5">
			<div class="row mt-3">
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				<h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">MedStory</h6>
				<p style="color: whitesmoke;">
					MedStory merupakan sebuah aplikasi yang menyimpan data riwayat kesehatan setiap kali
					seseorang berobat. Dilengkapi dengan fitur scan QR, live chat dengan dokter, forum kesehatan,
					informasi kesehatan, nomor darurat, dan juga pencarian dokter. 
				</p>
			</div>
			<div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4">
				<h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">Kelompok 4</h6>
				<p style="color: whitesmoke;">
					<a class="text-reset">Muhammad Rafi Alfarisi</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">Leonardho R. Sitanggang</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">Fauzan Reza Ananda</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">Muhammad Akmal Fadhlillah</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">Ananda Ardian Pratama P.</a>
				</p>
			</div>
			<div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4">
				<h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">NIM</h6>
				<p style="color: whitesmoke;">
					<a class="text-reset">1302194024</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">1302194041</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">1302194003</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">1302190103</a>
				</p>
				<p style="color: whitesmoke;">
					<a class="text-reset">1302194049</a>
				</p>
			</div>
		</section>
	</footer>

		<!-- Sign out Modal -->
		<div class="modal fade" id="signOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" style='color:black; font-size:16px;'>Apakah Anda yakin?...</h5>
					</div>
					<div class="modal-footer">
						<div class='container-fluid'>
						<form action='landing/logout' method='post'>
							<input required name='validation' type='text' style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121; width:200px; margin-left:40px; border-radius:4px;" placeholder="'KONFIRMASI'"></input>
							<button class="btn btn-danger" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-success">Ya</button>
						</form>
						</div>
					</div>			
				</div>
			</div>
		</div>

		<script type="text/javascript">
			//Rating star setting.
			$(document).ready(function(){
				$("input[type='radio']").click(function(){
					var sim = $("input[type='radio']:checked").val();
					if (sim<3) { 
						$('.myratings').css('color','red'); 
						$(".myratings").text(sim); 
					} else { 
						$('.myratings').css('color','green'); 
						$(".myratings").text(sim); 
					} 
				}); 
			});
		</script>

		<!--Others CDN.-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>
