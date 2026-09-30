<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Order Sticker</title>
</head>
<body>
<header class="clearfix">

	<h1>
		ORDER NO: #<?=$order_no ?? ''?>
	</h1>
	<div id="project">
		<div><span>Net weight: </span> <?=$net_weight ?? ''?></div>
		<div><span>Gross weight: </span> <?=$gross_weight ?? ''?></div>
		<div id="item_title"><?=strtolower($item_title ?? '')?></div>
	</div>
</header>
</body>
</html>

<style>
	#name_phone{font-size:0.9em;margin-bottom:2px;color: #000000;}
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
		font-size: 10px;
		font-family: Arial;
	}

	header {
		padding: 6px 0;
		margin-bottom: 20px;
	}

	h1 {
		border-bottom: 1px solid  #b5b8bb;
		color: #5D6975;
		font-size: 13px;
		font-weight: normal;
		text-align: right;
		margin: 0 0 0 0!important;
		padding: 0!important;
	}

	#project {
		float: left;
		font-size: 14px;
		margin-top: 2px;
		word-wrap: break-word!important;
	}
	#project #item_title{
		float: left;
		font-size: 13px;
		margin-top: 2px;
	}

	#project span {
		color: #5D6975;
		text-align: right;
		width: 52px;
		margin-right: 10px;
		display: inline-block;
		font-size: 12px;
	}

	#company {
		float: right;
		text-align: right;
	}

	#project div,
	#company div {
		white-space: nowrap;
	}



</style>
