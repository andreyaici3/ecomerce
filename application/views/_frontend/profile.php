<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?=$page_header; ?></h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url() ?>">Beranda<span style="margin-left: 5px; margin-right: 5px;" class="lnr lnr-arrow-right"></span></a>
						 <a href="#">Akun</a> 
				</nav>
			</div>
		</div>
	</div>
</section>

<section class="blog_area single-post-area section_gap">
    <div class="container"> 
        <div class="row">
			<div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle img-thumbnail" src="<?php base_url() ?>assets/img/blog/author.png" alt="" style="width: 50%;">
                        <h4><?= $this->session->userdata('userdata')['user_information']->name ?></h4>
                        <p><?= $this->session->userdata('userdata')['user_information']->username ?></p>
                        <p>Bergabung pada -</p>
                        <p>Alamat</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Menu</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="ganti-datadiri" class="d-flex justify-content-between">
                                    <p>Data Diri</p>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex justify-content-between" data-toggle="modal" data-target="#exampleModal">
                                    <p>Ubah Kata Sandi</p>
                                </a>
                            </li>
                        </ul>
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="belumbayar-tab" data-toggle="tab" href="#belumbayar" role="tab" aria-controls="belumbayar" aria-selected="true">Belum Bayar</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="dikemas-tab" data-toggle="tab" href="#dikemas" role="tab" aria-controls="dikemas" aria-selected="false">Dalam Proses</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="dikirim-tab" data-toggle="tab" href="#dikirim" role="tab" aria-controls="dikirim" aria-selected="false">Transaksi Berhasil</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="selesai-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Transaksi Ditolak</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="dibatalkan-tab" data-toggle="tab" href="#dibatalkan" role="tab" aria-controls="dibatalkan" aria-selected="false">Transaksi Dibatalkan</a>
                                </li>
                            </ul>
                            <br>
								<div class="tab-content mt-3" id="myTabContent">
									<div class="tab-pane fade show active" id="belumbayar" role="tabpanel" aria-labelledby="belumbayar-tab">
										<div class="table-responsive" id="belumbayar">
											<table id="tablebelumbayar" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Transaksi</th>
														<th>Kurir</th>
														<th>Total Harga</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
                                                    <?php $i=1; foreach ($belum_bayar as $bb) : ?>
                                                        <tr>
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $bb->id ?></td>
                                                            <td><?= $bb->kurir ?></td>
                                                            <td><?= $bb->total_harga ?></td>
                                                            <td><?= $bb->status ?></td>
                                                            <td><a href="order/billing/<?= $bb->id ?>">Lihat Detail</a></td>
                                                        </tr>
                                                    <?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="dikemas" role="tabpanel" aria-labelledby="dikemas-tab">
										<div class="table-responsive" id="proses">
											<table id="tableproses" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Transaksi</th>
														<th>Kurir</th>
														<th>Total Harga</th>
														<th>Status</th>
														<th>Nomor Resi</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
																									</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="dikirim" role="tabpanel" aria-labelledby="dikirim-tab">
										<div class="table-responsive" id="berhasil">
											<table id="tableberhasil" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Transaksi</th>
														<th>Kurir</th>
														<th>Total Harga</th>
														<th>Status</th>
														<th>Nomor Resi</th>
													</tr>
												</thead>
												<tbody>
																									</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
										<div class="table-responsive" id="tolak">
											<table id="tabletolak" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Transaksi</th>
														<th>Kurir</th>
														<th>Total Harga</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
																									</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="dibatalkan" role="tabpanel" aria-labelledby="dibatalkan-tab">
										<div class="table-responsive" id="batal">
											<table id="tablebatal" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Transaksi</th>
														<th>Kurir</th>
														<th>Total Harga</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
																									</tbody>
											</table>
										</div>
									</div>
								</div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
