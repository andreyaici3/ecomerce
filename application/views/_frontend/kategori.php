<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Home<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Produk<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a> 
						<a href="category.html">Kategori <?= $this->uri->segment(3) ?></a> 
				
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">
		<div class="row" style="margin-bottom: 100px; margin-top: 100px;">
		<?php if ($product) { ?>
			<div class="col-xl col-lg col-md">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<p style="height: 35px; color: white; line-height: 60px; font-size: 16px;" class="text-center">Daftar Produk Kategori <?= $this->uri->segment(3) ?></p>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->

						
							<?php foreach ($product as $p) : ?>
						
						<div class="col-lg-3 col-md-3">
							<div class="single-product">
								<div style="margin-bottom: 15px;">
									<a style="width: ;" href="<?= base_url('product/detailProduk/' . $p->id) ?>"><img style="width: 250px; height: 250px;" class="img-fluid img-thumbnail" src="<?= base_url('assets/img/produk/' . $p->image ); ?>" alt=""></a>
								</div>
								
								<div class="product-details">
									<a href="<?= base_url('product/detailProduk/'  . $p->id) ?>"><h6><?= $p->name ?></h6></a>
									<div class="price">
										<h6>IDR. <?= number_format($p->price) ?> </h6>
										
									</div>
									<div class="prd-bottom">

										<a class="social-info addCart" data-id="<?= $p->id  ?>">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						
							<?php endforeach; ?>
						
							
						
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						
					</div>
				</div>
				<!-- End Filter Bar -->
				<?php } else { ?>
					<div class="col-md">
						<h2 style="text-align: center;">Produk Berdasarkan Kategori <?= $this->uri->segment(3) ?> Tidak ditemukan</h2>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>


