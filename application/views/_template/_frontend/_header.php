<div class="main_menu">
	<nav class="navbar navbar-expand-lg navbar-light main_box">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand logo_h" href="<?= base_url(); ?>"><img style="width: 70px;" src="<?= base_url('assets/');?>img/conf/warungidtr.png" alt="">&nbsp;<b>Andrey Store</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
				<ul class="nav navbar-nav menu_nav ml-auto">
					
					<!-- Menu Home -->
					<li <?php if ($menuAktif == "Home") {
						echo "class='nav-item active'";
					} else {
						echo "class='nav-item'";
					} ?>><a class="nav-link" href="<?= base_url(); ?>">Beranda</a></li>
					<!-- End Menu Home -->
					<?php if (!@$this->session->userdata('userdata')['user_information']) { ?>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">User</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="<?= base_url('auth') ?>">Masuk</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= base_url('auth/daftar') ?>">Daftar Akun</a></li>
							</ul>
						</li>
					<?php } else { ?>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false"><?= $this->session->userdata('userdata')['user_information']->name ?></a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="<?= base_url('profile') ?>">Profil</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Keranjang</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= base_url('auth/keluar') ?>">Keluar</a></li>
							</ul>
						</li>
					<?php } ?>
					<li <?php if ($menuAktif == "Produk") {
						echo "class='nav-item active'";
					} else {
						echo "class='nav-item'";
					} ?>><a class="nav-link" href="<?= base_url('product'); ?>">Produk</a></li>
					<li <?php if ($menuAktif == "Category") {
						echo "class='nav-item submenu dropdown active'";
					} else {
						echo "class='nav-item submenu dropdown'";
					} ?>>
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false">Shop</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="<?= base_url('product') ?>">Product</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('order/checkout') ?>">Product Checkout</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('order') ?>">Shopping Cart</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('order/billing/23156') ?>">Confirmation</a></li>
						</ul>
					</li>
					<li class="nav-item ">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false">Kontak</a>
					</li>					
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a href="<?= base_url('order') ?>" class="cart">
							<span class="ti-bag"><sup id="ss" class="badge badge-xs badge-danger circle"><?= $this->M_Product->getRows() ?></sup> </span>
						</a>
					</li>
					<li class="nav-item">
						<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
					</li>
				</ul>
			
			</div>
		</div>
	</nav>
</div>
<div class="search_input" id="search_input_box">
	<div class="container">
		<form class="d-flex justify-content-between">
			<input type="text" class="form-control" id="search_input" placeholder="Search Here">
			<button type="submit" class="btn"></button>
			<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
		</form>
	</div>
</div>