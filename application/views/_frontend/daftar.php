<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Home<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Masuk</a> 				
				</nav>
			</div>
		</div>
	</div>
</section>

<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url('assets/'); ?>img/login.jpg" alt="">
						<div class="hover">
							<h4>Sudah memiliki akun?</h4>
							<p>Jika Anda sudah memiliki akun maka bisa langsung untuk masuk ke website Karma Shop.</p>
							<a class="primary-btn" href="halaman-masuk">Masuk</a>
							<p>Daftar melalui provider berikut :</p>
							<button id="googlebtn" onclick="googleRegister();" style="background-color: transparent; border: none;">
								<i class="icon fa fa-google"></i>
							</button>
							<button id="githubbtn" onclick="githubRegister()" style="background-color: transparent; border: none; ">
								<i class="icon fa fa-github"></i>
							</button>
							<button id="facebookbtn" onclick="facebookRegister()" style="background-color: transparent; border: none;">
								<i class="icon fa fa-facebook"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<form class="row login_form" action="proses/add-user.php" method="POST" id="contactForm" style="margin-top: -105px;">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required="" autocomplete="off">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna" pattern="[A-Za-z0-9]+" required="" autocomplete="off">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" pattern="[A-Za-z0-9]+" required="" autocomplete="off">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password_konfirmasi" name="password_konfirmasi" placeholder="Ulangi Kata Sandi" pattern="[A-Za-z0-9]+" required="" autocomplete="off">
							</div>
							<div class="col-md-12 form-group">
								<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon" pattern="[0-9]+" required="" autocomplete="off">
							</div>
							<div class="col-md-6 form-group">
								<div class="payment_item">
									<div class="radion_btn">
										<input type="radio" id="f-option5" name="level" required="" value="Pembeli">
										<label for="f-option5">Pembeli</label>
										<div class="check"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div class="payment_item">
									<div class="radion_btn">
										<input type="radio" id="f-option6" name="level" required="" value="Penjual">
										<label for="f-option6">Penjual</label>
										<div class="check"></div>
									</div>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<div class="g-recaptcha" data-sitekey="6LcncrkZAAAAAGU-CZEPx6oAkxQij2itktrlvYqc" align="center"></div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Daftar Sekarang</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>