<div class="single-listed-food">
	<div class="img">
		<a href="#"><img src="<?=$product['product_image']?>" alt=""></a>
		<div class="wishlist"><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-heart"></i></a></div>
	</div>
	<div class="item-details">
		<div class="restaurant-name-location">

			<a href="#"><i class="fas fa-utensils"></i><?=$data['category_name'][$product['category_id']]?></a>
		</div>
		<div class="title">
			<h3><a href="#"><?=$product['product']?></a></h3>
		</div>

		<div class="price-ratings">
			<div class="price">₹<?=$product['offer_price'] > 0 ? $product['offer_price'] : $product['sale_price']?>
				<?=$product['offer_price'] > 0 ? '<del>₹'.$product['sale_price'].'</del>' : ''?>
			</div>
			<a href="#" class="bttn-round btn-fill"><i class="fas fa-shopping-cart"></i></a>
		</div>
	</div>
</div>
