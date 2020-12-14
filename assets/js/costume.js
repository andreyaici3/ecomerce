$(function(){

	const alamat = 'http://127.0.0.1/toko/';

	function editQty(rowid, qty){
		$.ajax({
			url: 'http://127.0.0.1/toko/order/editQty',
			method: 'post',
			data: {rowid: rowid, value: qty},
			dataType: 'json',
			success: function(data){
				$('.total').html(data);
			}
		});
	}

	

	$('.increase').on('click', function(){
		let sst = $(this).data('sst');
		let qty = $('#' + sst).val();
		let hrg = $(this).data('harga');
		let tot = hrg * qty;
		const rowid = $(this).data('rowid');
		$('.' + sst).html(tot); 

		editQty(rowid, qty);
	});



	$('.addCart').on('click', function(){
		let id = $(this).data('id');
		$.ajax({
			url: alamat + 'product/addCart',
			data: {id: id},
			method: 'post',
			success: function(hasil){
				$('#ss').html(hasil);
			}
		})
	});

	$('.mines').on('click', function(){
		let sst = $(this).data('sst');
		let qty = $('#' + sst).val();
		let hrg = $(this).data('harga');
		let tot = hrg * qty;
		const rowid = $(this).data('rowid');
		$('.' + sst).html(tot); 

		editQty(rowid, qty);
	})

	$('.country_select').on('click', function(){
		const id = $(this).val();

		console.log(id);
	})

	$('#provinsi').on('change', function(){
		let id = $('#provinsi').val();

		$.ajax({
			url: 'http://127.0.0.1/toko/WebApis/getKabupaten/',
			data: {id: id},
			dataType: 'html',
			method: 'post',
			success: function(html){
				$('#kab').html(html);
			}

		})
	})

	$('#kurir').on('change', function(){
		let kurir = $('#kurir').val();
		let destination = $('#kab').val();

		$.ajax({
			url: 'http://127.0.0.1/toko/WebApis/getLayanan',
			data: {
				kurir: kurir,
				dest: destination
			},
			dataType: 'html',
			method: 'post',
			success: function(html){
				$('#layanan').html(html);
			}
		})
	})

	$('#cek').on('click', function(){
		let harga = $('#layanan').val();
		
		$.ajax({
			url: 'http://127.0.0.1/toko/WebApis/getHarga',
			data: {
				harga: harga
			},
			dataType: 'json',
			method: 'post',
			success: function(html){
				$('#totOngkir').html(html.harga);
				$('#totSemua').html(html.total);
			}
		})

		
	})
})