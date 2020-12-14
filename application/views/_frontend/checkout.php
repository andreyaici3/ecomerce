<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Beranda<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Checkout</a> 
				</nav>
			</div>
		</div>
	</div>
</section>
<!--================Checkout Area =================-->
    <section style="margin-top: -150px;" class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <?php if (!$this->session->userdata('login')['user_id'] && !$this->session->userdata('login')['name']): ?>
                    <div class="check_title">
                        <h2>Returning Customer? <a href="#">Click here to login</a></h2>
                    </div>
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                        customer, please proceed to the Billing & Shipping section.</p>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="name" name="name">
                            <span class="placeholder" data-placeholder="Username or Email"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="placeholder" data-placeholder="Password"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">login</button>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option" name="selector">
                                <label for="f-option">Remember me</label>
                            </div>
                            <a class="lost_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                    <?php else: ?>
                        
                <?php endif ?>
                
            </div>
            <div class="billing_details">
                
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Shipping Detail</h3>
                        <form class="row contact_form" action="" method="post">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" readonly class="form-control" id="name" name="fullName" value="<?= $this->session->userdata('login')['name'] ?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input readonly type="text" class="form-control" id="number" name="number" value="+62 <?= $this->session->userdata('login')['phone'] ?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input readonly type="text" class="form-control" id="email" name="email" value="<?= $this->session->userdata('login')['email'] ?>">

                                <!-- <span class="placeholder" data-placeholder="Email Address"></span> -->
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select name="prov" class="country_select sel form-control" data-placeholder="Provinsi" id="provinsi">
                                    <option>Pilih Provinsi</option>
                                    <?php foreach ($provinsi as $value): ?>
                                          <option value="<?= $value->province_id ?>"><?= $value->province ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Jalan, Apartement, RT / RW / blok / Dusun, No Rumah"></span>
                            </div>
                            <div class="col-md-6 form-group p_star" >
                                <select name="kab" class="country_select sel form-control" id="kab">
                                    <option>Pilih Kabupaten</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="kdPos" name="kdPos" placeholder="kode Pos*">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <select name="kurir" class="country_select sel form-control" id="kurir">
                                    <option value="1">Pilih Kurir</option>
                                    <option value="jne">Jalur Nugraha Eka (JNE)</option>
                                    <option value="tiki">TIKI</option>
                                    <option value="pos">POS</option>
                                
                                </select>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <select name="layanan" class="country_select sel form-control" id="layanan">
                                     <option value="pos">Pilih Layanan</option>
                                 </select>
                                    
                            </div>                          
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Catatan Pembelian"></textarea>
                            </div>
                            <div class="col-md-3 mb-4" style="margin-top: -20px;">
                                <a style="color: white;" class="primary-btn" id="cek">Check Ongkir</a>
                            </div>
                            <div class="col-md-12">
                                <div class="cupon_area">
                                    <div class="check_title">
                                        <h2>Apakah Anda Punya Kode Voucher?</h2>
                                    </div>
                                    <input type="text" placeholder="Enter coupon code">
                                    <a class="tp_btn" href="#">Masukan Kode Voucher</a>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Rincian Pembayaran</h2>
                             <ul class="list list_2">
                                <li><a href="#">Total Keranjang <span id="totKeranjang"><?= "Rp. ". number_format($this->cart->total()) ?></span></a></li>
                                <li><a href="#">Total Ongkir <span id="totOngkir">Rp. -</span></a></li>
                                <li><a href="#">Total <span id="totSemua"><?= "Rp. ". number_format($this->cart->total()) ?></span></a></li>
                            </ul>
                        </div>
                        <br>
                        <div class="order_box">
                            <h2>Metode Pembayaran</h2>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Konfirmasi Manual</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Otomatis</label>
                                    <img src="<?= base_url() ?>img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <button style="border: none;" class="primary-btn" href="#">Proses Pemesanan</button>
                        </div>
                         </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
