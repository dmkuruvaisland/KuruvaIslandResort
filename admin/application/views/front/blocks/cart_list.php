<?php
	if(isset($data)){
		?>
		<div class="row mb-60" >
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<?php
				foreach($data['cart']['products'] as $product){
					?>
					<div class="single-listed-food single-listed-food-variant">
						<div class="row">
							<div class="col-3 cart_image">
								<div class="img">
									<img src="<?=$product['product_image']?>" alt="">
								</div>
							</div>
							<div class="col-9">
								<div class="cart_spec_title"><?=$product['product']?></div>
								<div class="cart_spec_sub_title"><?=$product['product_variant_title']?></div>
								<div class="cart_spec">Weight: <?=$product['quantity']?> kg</div>
								<div class="cart_spec">
									Price: ₹<?=$product['offer_price'] > 0 ? $product['offer_price'] : $product['sale_price']?>
									<?=$product['offer_price'] > 0 ? '<del>₹'.$product['sale_price'].'</del>' : ''?>
								</div>
								<div class="row">
									<div class="col-4">
										<div class="price-ratings">
											<div class="cart_spec_price">
												₹<?=$product['item_total_price']?>
											</div>
										</div>
									</div>
									<div class="col-5">
										<div class="quantity">
											<a href="javascript:void(0)" class="quantity__minus" id="<?='minus_'.$product['product_id'].'_'.$product['variant_id']?>"
											   onclick="remove_from_cart(<?=$product['product_id']?>, <?=$product['variant_id']?>, <?='-'.$product['unit_value']?>)"><span>-</span></a>

											<input name="<?='quantity_'.$product['product_id'].'_'.$product['variant_id']?>" type="text"
												   class="quantity__input" id="<?='quantity_'.$product['product_id'].'_'.$product['variant_id']?>"
												   value="<?=$product['quantity_no']?>" readonly>

											<a href="javascript:void(0)" class="quantity__plus" id="<?='plus_'.$product['product_id'].'_'.$product['variant_id']?>"
											   onclick="add_to_cart(<?=$product['product_id']?>, <?=$product['variant_id']?>, <?=$product['unit_value']?>)"><span>+</span></a>
										</div>
									</div>
									<div class="col-3">
										<span href="#" class="delete_button" onclick="remove_cart(<?=$product['product_id']?>, <?=$product['variant_id']?>)">Remove</span>
									</div>
								</div>



							</div>
							<div class="col-12 show_message_cart" id="<?='show_message_'.$product['product_id'].'_'.$product['variant_id']?>"></div>
						</div>

					</div>
					<?php
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="cart-card">
					<div class="card">
						<div class="card-header">
							<h4>Calculate Total</h4>
						</div>
						<div class="card-body">
							<div class="single-cart-total">
								<p>Subtotal</p>
								<p class="cart-amount">₹<?=$data['cart']['cart_total_price']?></p>
							</div>
							<a href="<?=base_url('checkout/')?>" class="bttn-small btn-fill">Proceed to Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
?>
