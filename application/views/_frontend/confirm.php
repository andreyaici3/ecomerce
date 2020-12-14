<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4 mb-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Order number</span> : <?= $order->invoice_id  ?></a></li>
							<li><a href="#"><span>Date</span> : <?= $order->tgl_transaksi  ?></a></li>
							<li><a href="#"><span>Total</span> : IDR. <?= number_format($order->total_harga)  ?></a></li>
							<li><a href="#"><span>Payment method</span> : Check payments</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : <?= $order->street  ?></a></li>
							<li><a href="#"><span>City</span> : <?= $order->city  ?></a></li>
							<li><a href="#"><span>Country</span> : <?= $order->country  ?></a></li>
							<li><a href="#"><span>Postcode </span> : <?= $order->post_code  ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : <?= $order->street  ?></a></li>
							<li><a href="#"><span>City</span> : <?= $order->city  ?></a></li>
							<li><a href="#"><span>Country</span> : <?= $order->country  ?></a></li>
							<li><a href="#"><span>Postcode </span> : <?= $order->post_code  ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($product as $value): ?>								
							<tr>
								<td>
									<p><?= $value->name  ?></p>
								</td>
								<td>
									<h5>x <?= $value->qty  ?></h5>
								</td>
								<td>
									<p>IDR. <?= number_format($value->price*$value->qty)  ?></p>
								</td>
							</tr>
							<?php endforeach ?>

							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR. <?= number_format($order->total_harga)  ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: IDR. <?= number_format(18000)  ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR. <?= number_format($order->total_harga+18000)  ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->