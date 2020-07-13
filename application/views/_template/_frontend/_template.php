<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<?=@$_head?>
</head>
<body <?=(@$menuAktif == "Category")?'id="category"':'';?>>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<?=@$_header?>
	</header>
	<!-- End Header Area -->
	<?php if (@$menuAktif == "Home"){ ?>
	<!-- start banner Area -->
	<section class="banner-area">
		<?=@$_banerArea?>
	</section>
	<!-- End banner Area -->
	<?php }else{ ?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<?=@$_banerNA?>
	</section>
	<!-- End banner Area -->
	<?php } ?>


	<?= $_content?>


	<!-- Start related-product Area -->
	<?php if (@$menuAktif2 != 'login'): ?>
		<section class="related-product-area section_gap_bottom">
			<?=@$_related?>
		</section>
	<?php endif ?>
	
	<!-- End related-product Area -->

	<!-- start footer Area -->
	
	<footer class="footer-area section_gap">
		<?=@$_footerSection?>
	</footer>
	
	
	<!-- End footer Area -->

	<?=@$_libfooter?>
</body>

</html>