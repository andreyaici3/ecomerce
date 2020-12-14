
<?php 

	$deal	= $this->M_Product->deal();

 ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6 text-center">
			<div class="section-title">
				<h1>Produk Terjual</h1>
				<p>Berikut Ini Adalah Daftar Produk Mingguan Yang Berhasil Terjual Di Andrey Store</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9">
			<div class="row">
				<?php foreach ($deal as $value): ?>					
				<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
					<div class="single-related-product d-flex">
						<a href="#"><img style="width: 90px; height: 90px; overflow:scroll;" src="<?= base_url('assets/img/produk/' . $value->image);?>" alt=""></a>
						<div class="desc">
							<a href="#" class="title"><?= $value->name  ?></a>
							<div class="price">
								<h6>IDR. <?= number_format($value->price)  ?></h6>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>

			</div>
		</div>
		<div class="col-lg-3">
			<div class="ctg-right">
				<a href="#" target="_blank">
					<img class="img-fluid d-block mx-auto" src="<?= base_url('assets/');?>img/category/c5.jpg" alt="">
				</a>
			</div>
		</div>
	</div>
</div>
