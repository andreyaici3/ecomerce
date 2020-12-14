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

<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<?= $this->session->flashdata('loginPopUp') ?>
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url('assets/'); ?>img/login.jpg" alt="">
						<div class="hover">
							<h4>Belum Memiliki Akun.?</h4>
							<p>Anda dapat mendaftar akun baru di Andrey Store dengan Gratis</p>
							<a class="primary-btn" href="registration.html">Buat Akun Baru</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>SELAMAT DATANG</h3>
						<form class="row login_form" action="<?= base_url('auth/authentication') ?>" method="POST" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 col-md-9 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Ingat Saya</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Masuk</button>
								<a href="#" style="color: black;">Lupa Sandi ?</a>
							</div>
							<div class="col-md-12 form-group">
								<button style="background-color: #ffffff; border: none; cursor: pointer; font-size: 25px; margin-right: 10px;">
									<i class="fa fa-google"></i>
								</button>
								<button style="background-color: #ffffff; border: none; cursor: pointer; font-size: 25px; margin-right: 10px;">
									<i class="fa fa-github"></i>
								</button>
								<button style="background-color: #ffffff; border: none; cursor: pointer; font-size: 25px;">
									<i class="fa fa-facebook"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Login Box Area =================-->

	