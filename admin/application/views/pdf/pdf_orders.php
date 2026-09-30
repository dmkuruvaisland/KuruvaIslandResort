<?php
if(!empty($orders)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Orders</title>
    </head>
    <body><br>
        <h3>ORDER LIST</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Order Details</th>
            </tr>
            <?php
            $i=1;
            $total_amount = 0;
                foreach($orders as $order){
                    $total_amount = $total_amount + $order->amount;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $order->name; ?></td>
                            <td><?php echo $order->phone; ?></td>

                             <td>
                                <?php
                                    echo date('d M Y h:i A', strtotime($order->order_date))."<br>";
                                    if($order->payment_method == 1){
                                        echo "<span class=\"badge badge-info\">ONLINE</span>";
                                    }elseif ($order->payment_method == 2){
                                        echo "<span class=\"badge badge-success\">COD</span>";
                                    }
                                ?>                
                            </td>
							<td style="text-align: right"><?=number_format($order->amount, 2); ?></td>
                        </tr>
                    <?php
                    $i++;
                }
            ?>
            <tr>
                <th colspan="4">Total</th>
                <th colspan="1" style="text-align: right"><?=number_format($total_amount, 2)?></th>
            </tr>
        </table>
		<div style="width: 100%;padding:70px;text-align: center;">
			<img src="<?=base_url('assets/logo_small.png')?>" style="width:160px;height:auto;margin:auto;">
		</div>
    </body>
    </html>
    <?php
}
?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
		padding:6px;
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
