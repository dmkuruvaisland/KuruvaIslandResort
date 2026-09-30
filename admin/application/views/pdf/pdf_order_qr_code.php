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
            </h1>
            <div id="project">
                <div><span>ADDRESS: </span> <?=$item->address?></div>
                <!--<div><span>PANCHAYATH & WARD: </span> <?=$item->panchayath_name?> - <?=$item->ward_name?></div>-->
                <div><span>ORDER ITEMS: </span>
                    <?php
                    foreach($item->order_items as $item){
                        echo $item."<br>";
                    }
                    ?>
                </div>
            </div>
        </header>
        <footer>
            <div id="logo2">
                <img src="<?=base_url('assets/logo_small.png')?>" style="width: 110px;height:auto">
            </div>
        </footer>
        </body>
        </html>
        <?php
    }
?>

<style>
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
