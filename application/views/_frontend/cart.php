<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Beranda<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Keranjang</a> 
				</nav>
			</div>
		</div>
	</div>
</section>
<?php

    if ($this->cart->contents() == null){

?>
 <section class="cart_area">
    <div class="container">
        <div class="cart_inner">
                            
            <p align="center">
                <img src="<?php base_url() ?>assets/img/conf/empty.svg" alt="" style="width: 200px;">
            </p>
            <h3 align="center">Keranjang Kosong, Silahkan Berbelanja Terlebih Dahulu</h3>
        </div>
    </div>
</section>

<?php 

    } else {

?>

<!-- ================Cart Area =================-->
    <section style="margin-top: -150px;" class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($shopCart as $value): ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img style="width: 80px" src="<?= base_url('assets/img/produk/' . $this->M_Product->image($value['id'])); ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?= $value['name']  ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?= $value['price']  ?></h5>
                                </td>
                                <td>
                                    <!-- <?= $i  ?> lamun di ganti jadi rowiD error moal ? DUKA tah can di acakan soalna tadina urqng mikirna kmha carana hnt bentrok wan, di js na kmha emang bisa echo php? bisa drey -->
                                    <div class="product_count">
                                        <input type="text" name="qty" data-sst="sst<?= $i  ?>" id="sst<?= $i  ?>" maxlength="12" value="<?= $value['qty'] ?>" title="Quantity:"
                                            class="input-text qty">
                                        <button data-sst="sst<?= $i  ?>" data-harga="<?= $value['price']  ?>" data-value="<?= $value['qty']  ?>" data-rowid="<?= $value['rowid']  ?>" onclick="var result = document.getElementById('sst<?= $i  ?>'); var sst<?= $i  ?> = result.value; if( !isNaN( sst<?= $i  ?> )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button data-sst="sst<?= $i  ?>" data-harga="<?= $value['price']  ?>" data-value="<?= $value['qty']  ?>" data-rowid="<?= $value['rowid']  ?>" onclick="var result = document.getElementById('sst<?= $i  ?>'); var sst<?= $i  ?> = result.value; if( !isNaN( sst<?= $i  ?> ) &amp;&amp; sst<?= $i  ?> > 1 ) result.value--;return false;"
                                            class="reduced mines items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="subtotal sst<?= $i ?>"><?= $value['subtotal']  ?></h5>
                                </td>
                            </tr>
                            <?php $i++; endforeach ?>
                          
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5 class="total"><?=$this->cart->format_number($this->cart->total());?></h5>
                                </td>
                            </tr>
                            
                            </tbody> 
                    </table>
                </div>
                <div style="margin-top: -20px;">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a class="gray_btn ml-3 mt-3 mb-4" href="#">Update Cart</a>
                    </div>
                    <div class="offset-3">

                    </div>
                    <div class="col-md-5 mt-3 col-xs-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Coupon Code" aria-describedby="inv2">
                            <div class="input-group-append">
                                <span id="inv2"><a class="primary-btn" style="border-radius:0; height: 38px; line-height: 38px" href="#">Apply</a></span>
                            </div>
                            <a class="gray_btn" style="border-radius:0; height: 38px; line-height: 38px" href="#">Close Coupon</a>
                        </div>
                    </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="row">
                    <div class="offset-5">

                    </div>
                    <div class="col-md-3">
                        <div class="checkout_btn_inner d-flex align-items-center">
                            <a class="gray_btn" href="<?= base_url('product') ?>">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-md-3 ml-3">
                        <div class="checkout_btn_inner d-flex align-items-center">
                            <a style="height: 39px; border-radius:0; line-height: 39px;" class="primary-btn" href="<?= base_url('order/checkout') ?>">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================End Cart Area ================= -->
   
    <script type="text/javascript">
    $(function(){
        $('.addCart').on('click',function(){
            const id = $(this).data('id');
            location.href = "http://127.0.0.1/toko/product/addCart/" + id;
        });

        $('.increase').on('click', function(){
            const rowid = $(this).data('rowid');
            const a = $(this).data('value');
            const value = parseInt(a) + 1;

            $.ajax({
                url: 'http://127.0.0.1/toko/order/editQty',
                method: 'post',
                data: {rowid: rowid, value: value},
                dataType: 'json',
                success: function(data){
                    $('')
                }
            });

        });

        $('.mines').on('click', function(){
            const rowid = $(this).data('rowid');
            const a = $(this).data('value');
            const value = parseInt(a) - 1;

            $.ajax({
                url: 'http://127.0.0.1/toko/order/editQty',
                method: 'post',
                data: {rowid: rowid, value: value},
                dataType: 'json',
                success: function(data){
                    
                }
            });

            location.href = "http://127.0.0.1/toko/order";

        })
    })
</script>

<?php 
    } 
    ?>

