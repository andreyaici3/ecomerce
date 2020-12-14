<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Home<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Produk<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a> 
						<a href="category.html">Semua Kategori</a> 
				
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">
		<div class="row" style="margin-bottom: 100px; margin-top: 100px;">
			<div class="col-xl-3 col-lg-4 col-md-5 mb-4">
				<div class="sidebar-categories">
					<div class="head">Kategori Produk</div>
					<ul class="main-categories">
						<?php foreach ($category as $value): ?>
							<li class="main-nav-list"><a href="product/category/<?= $value->nama_kategori ?>"><span
									 class="lnr lnr-arrow-right"></span><?= $value->nama_kategori  ?><span class="number">(<?= $this->M_Product->get($value->id_kategori) ?>)</span></a>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
				
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<p style="height: 35px; color: white; line-height: 60px; font-size: 16px;" class="text-center">Selamat Berbelanja</p>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->

						<?php foreach ($product as $key): ?>
							
						
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<div style="margin-bottom: 15px;">
									<a style="width: ;" href="<?= base_url('product/detailProduk/' . $key->id) ?>"><img style="width: 250px; height: 250px;" class="img-fluid img-thumbnail" src="<?= base_url('assets/img/produk/' . $key->image); ?>" alt=""></a>
								</div>
								
								<div class="product-details">
									<a href="<?= base_url('product/detailProduk/' . $key->id) ?>"><h6><?= $key->name ?></h6></a>
									<div class="price">
										<h6>IDR. <?= number_format($key->price) ?> </h6>
										
									</div>
									<div class="prd-bottom">

										<a class="social-info addCart" data-id="<?= $key->id  ?>">
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
						<?php endforeach ?>
						
						
						
						
						
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						
					</div>
					<?= $page; ?>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>


