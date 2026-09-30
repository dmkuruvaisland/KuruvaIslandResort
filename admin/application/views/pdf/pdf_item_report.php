<?php
if(!empty($item_report)){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Stock Item Report</title>
	</head>
	<body><br>
	<h3>STOCK ITEM REPORT</h3>
	<p>
		From <b><?= DateTime::createFromFormat('Y-m-d', $_GET['from_date'])->format('d-m-Y')?></b>
		To <b><?= DateTime::createFromFormat('Y-m-d', $_GET['to_date'])->format('d-m-Y')?></b>

	</p>
	<table>
		<tr>
			<th>#</th>
			<th>Item Name</th>
			<th>Cost</th>
			<th>Purchase Qty</th>
			<th>Purchase Return Qty</th>
			<th>Sale Qty</th>
			<th>Sales Return Qty</th>
			<th>Balance Qty</th>
			<th>Stock Value</th>
		</tr>
		<?php
		if(isset($item_report)){
			$total_items = 0;
			foreach ($item_report as $key => $item){
				?>
				<tr>
					<td><?=$key+1?></td>
					<td><?=$item['product_name']?></td>
					<td><?=round($item['purchase_price_average'], 2)?></td>
					<td><?=round($item['purchase_quantity'], 2)?></td>
					<td><?=round($item['purchase_return_quantity'], 2)?></td>
					<td><?=round($item['order_quantity'], 2)?></td>
					<td><?=round($item['order_return_quantity'], 2)?></td>
					<td><?=round($item['stock_balance'], 2)?></td>
					<td><?=round($item['stock_value'], 2)?></td>
				</tr>
				<?php
				$total_items += $item['quantity'];
			}
		}
		?>
	</table>
	</body>
	</html>
	<?php
}
?>

<style>
	table, th, td {
		border: 1px solid #949191;
		border-collapse: collapse;
		padding:7px;
	}
	table {
		margin-top:10px;
		width: 100%;
	}
	#name_phone{font-size:0.7em;margin-bottom:2px;color: #000000;}
	#payment_details{display:block;font-size:14px;color: #090991;}

	.clearfix:after {
		content: "";
		display: table;
		clear: both;
	}

	a {
		color: #5D6975;
		text-decoration: underline;
	}

	body {
		position: relative;
		width: 21cm;
		height: 29.7cm;
		margin: 0 auto;
		color: #001028;
		background: #FFFFFF;
		font-family: Arial, sans-serif;
		font-size: 12px;
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
		border-bottom: 1px solid  #b5b8bb;
		color: #5D6975;
		font-size: 1.4em;
		font-weight: normal;
		text-align: right;
		margin: 0 0 5px 0;
	}

	#project {
		float: left;
		font-size: 0.9em;
		margin-top: 2px;
	}

	#project span {
		color: #5D6975;
		text-align: right;
		width: 52px;
		margin-right: 10px;
		display: inline-block;
		font-size: 0.9em;
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
		color: #5D6975;
		font-size: 1.2em;
	}

	footer {
		color: #5D6975;
		width: 100%;
		position: absolute;
		bottom: 0;
		border-top: 1px solid #C1CED9;
		padding: 2px 0;
		text-align: center;
		font-size: 0.7em;
	}
</style>
