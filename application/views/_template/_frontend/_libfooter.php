<script src="<?= base_url('assets/');?>js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
 crossorigin="anonymous"></script>
<script src="<?= base_url('assets/');?>js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery.sticky.js"></script>
<script src="<?= base_url('assets/');?>js/nouislider.min.js"></script>
<script src="<?= base_url('assets/');?>js/countdown.js"></script>
<script src="<?= base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/');?>js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?= base_url('assets/');?>js/gmaps.min.js"></script> -->
<script src="<?= base_url('assets/');?>js/main.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/costume.js') ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
		$(document).ready(function() {
			$('#tablebelumbayar').DataTable({
				"paging":  false,
				"info": false,
				"lengthMenu": [[0, 0,0, -1], [10, 25, 50, "All"]]
			});
			$('#tableproses').DataTable({
				"paging":   false,
				"info": false,
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			});
			$('#tableberhasil').DataTable({
				"paging":   false,
				"info": false,
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			});	
			$('#tabletolak').DataTable({
				"paging":   false,
				"info": false,
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			});			
			$('#tablebatal').DataTable({
				"paging":   false,
				"info": false,
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			});
		});
	</script>

