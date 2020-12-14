<div class="container">
	<div class="row fullscreen align-items-center justify-content-start">
		<div class="col-lg-12">
			<div  style="margin-top: 100px;" class="active-banner-slider owl-carousel">
				<?php foreach($new_product as $k) : ?>
				<!-- single-slide -->
				<div class="row single-slide align-items-center d-flex">
					<div class="col-lg-5 col-md-6 col-xs-12">
						<div class="banner-content">
							<h1><?= $k->name ?></h1>
							<?= htmlspecialchars_decode($k->description) ?>
							<div class="add-bag d-flex align-items-center">
								<a style="width: 10;" class="add-btn addCart" href="" data-id="<?= $k->id  ?>" ><span class="lnr lnr-cross"></span></a>
								<span class="add-text text-uppercase">Add to Bag</span>
							</div>
						</div>
					</div>
					<div style="margin-top: 100px;" class="col-md-4 offset-2">
						<div class="banner-img" style="width: 300px; height:300px; overflow:hidden;">
							<img class="" src="<?= base_url('assets/img/produk/' .  $k->image);?>" alt="">
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>