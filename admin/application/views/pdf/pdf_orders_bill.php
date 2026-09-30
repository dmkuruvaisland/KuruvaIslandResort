<?php
if(!empty($item)){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>QR Code - Orders</title>
	</head>
	<body>
    <section>
        <div id="logo3">
            <img src="<?=base_url('assets/logo_small.png')?>" style="width: 120px;height:auto">
        </div>
    </section>
<!--	<section>-->
<!--		<div id="logo2">-->
<!--			<img src="--><?//=base_url('assets/logo_small.png')?><!--" style="width: 65px;height:auto">-->
<!--		</div>-->
<!--	</section>-->
	<header class="clearfix">

		<h1>
			<div id="logo">
				<img src="<?=$item->qr_code?>>">
			</div>
			<div id="name_phone"><span>Name: </span> <?=strtoupper($item->name)?> <br>(<?=$item->phone?>)</div>
			<div id="payment_details">
				₹<?=number_format($item->amount, 2)?> - <?=$item->payment_method?>
			</div>
			#<?=$item->order_no?>
			<div id="address"><span>ADDRESS: </span> <?=strtoupper($item->address)?></div>
		</h1>
		<div id="project">
			<table>
				<tr>
					<th>#</th>
					<th>Item</th>
					<th>Rate</th>
					<th>Qty</th>
					<th>Amt</th>
				</tr>
				<?php
				foreach($item->order_items as $order_item){
					?>
					<tr>
						<td>1</td>
						<td>
							<?=$order_item['item_title']?><br>
							<small><?=$order_item['weight']?></small>
						</td>
						<td class="right_align"><?=$order_item['product_price']?></td>
						<td><?=$order_item['quantity_no']?></td>
						<td class="right_align amount"><?=$order_item['total_amount']?></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan="4" class="right_align">Total Amount</td>
					<td class="right_align"><?=$item->item_amount?></td>
				</tr>
				<tr>
					<td colspan="4" class="right_align">Delivery Charge</td>
					<td class="right_align"><?=$item->delivery_charge?></td>
				</tr>
				<tr>
					<td colspan="4" class="right_align">Bell Coins</td>
					<td class="right_align"><?=$item->coins_applied?></td>
				</tr>
				<tr>
					<td colspan="4" class="right_align">Coupon saved</td>
					<td class="right_align"><?=$item->coupon_saved_amount > 0 ? '-'.$item->coupon_saved_amount : ''?></td>
				</tr>
				<tr>
					<th colspan="4" class="right_align">Payment Amount</th>
					<th class="right_align"><?=$item->amount?></th>
				</tr>
			</table>
			<br>
			<br>
			<br>
			<div style="text-align: center!important;margin:auto!important;border-top:1px solid #dedcdc;padding-top:6px;font-size:0.8em;">
				<span>Bill Date: </span> <?= DateTime::createFromFormat('Y-m-d', date('Y-m-d'))->format('d-m-Y')?> |
				<span>Order Date: </span> <?= DateTime::createFromFormat('Y-m-d H:i:s', $item->order_date)->format('d-m-Y')?>
			</div>

			</div>
		</div>
	</header>

	</body>
	</html>
	<?php
}
?>

<style>
	.right_align{text-align: right!important;}
	table, th, td{border: 1px solid #000000;border-collapse: collapse;}
	th, td{padding:10px;}
	#address{font-size:11px;text-align:left;padding:10px;border-top:1px solid #000000}
	#name_phone{font-size:0.7em;margin-bottom:2px;color: #000000;}
	#payment_details{display:block;font-size:14px;color: #000000;}

	.clearfix:after {
		content: "";
		display: table;
		clear: both;
	}

	a {
		color: #000000;
		text-decoration: underline;
	}

	body {
		/*position: relative;*/
		/*width: 21cm;*/
		/*height: 29.7cm;*/
		margin: 0 auto;
		color: #000000;
		background: #FFFFFF;
		font-family: Arial, sans-serif;
		font-size: 13px;
		font-family: Arial;
	}

	header {
		padding: 6px 0;
		margin-bottom: 20px;
	}

	#logo {
		width: 85px;
		height: 85px;
		margin-bottom:-77px;
	}
	#logo2  img{
		margin-bottom:-40px;
	}

	h1 {
		border-top: 1px solid #b5b8bb;
		border-bottom: 1px solid #d5d8da;
		color: #000000;
		font-size: 1.4em;
		font-weight: normal;
		text-align: right;
		margin: 0 0 5px 0;
	}

	#project {
		float: left;
		font-size: 1.2em;
		margin-top: 2px;
	}

	#project span {
		color: #000000;
		text-align: right;
		width: 52px;
		margin-right: 10px;
		display: inline-block;
		font-size: 0.9em;
	}

    .amount{
        
    }
	#company {
		float: right;
		text-align: right;
	}

	#project div,
	#company div {
		white-space: nowrap;
	}


	#notices .notice {
		color: #000000;
		font-size: 1.2em;
	}

	section {
		color: #000000;
		width: 100%;
		/*position: absolute;*/
		/*top: 20px;*/
		/*border-top: 1px solid #C1CED9;*/
		padding-top: 20px;
		padding-bottom: 10px;
		/*margin-left: -140px;*/
		text-align: center;
		font-size: 0.7em;
	}
</style>
