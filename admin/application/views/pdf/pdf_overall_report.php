<?php
if(!empty($panchayath)){
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
            <th>Panchayath</th>
            <th>Customers</th>
            <th>DDP</th>
            <th>Ward Count</th>
            <th>Total Order Count</th>
            <th>Order COD</th>
            <th>Order ONLINE</th>
            <th>Total Order Amount</th>
            <th>COD Amount</th>
            <th>Online Amount</th>
        </tr>
        <?php
        if(isset($panchayath)){
            foreach ($panchayath as $key => $value){
                ?>
                <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value['panchayath_name']; ?></td>
                    <td><?=$value['total_customers']; ?></td>
                    <td><?=$value['total_ddp']; ?></td>
                    <td><?=$value['total_ward']; ?></td>
                    <td><?=$value['total_order_count']; ?></td>
                    <td><?=$value['total_order_count_cod']; ?></td>
                    <td><?=$value['total_order_count_online']; ?></td>
                    <td style="text-align:right">₹ <?=number_format($value['total_order_amount'], 2); ?></td>
                    <td style="text-align:right">₹ <?=number_format($value['total_order_amount_cod'], 2); ?></td>
                    <td style="text-align:right">₹ <?=number_format($value['total_order_amount_online'], 2); ?></td>
                </tr>
                <?php
            }
        }
        ?>
        <tr>
            <th colspan="2">Total</th>
            <th><?=$total_customers ?? 0?></th>
            <th>-</th>
            <th>-</th>
            <th><?=$total_order_count ?? 0?></th>
            <th><?=$total_order_count_cod ?? 0?></th>
            <th><?=$total_order_count_online ?? 0?></th>
            <th style="text-align:right">₹ <?=number_format($total_order_amount ?? 0, 2); ?></th>
            <th style="text-align:right">₹ <?=number_format($total_order_amount_cod ?? 0, 2); ?></th>
            <th style="text-align:right">₹ <?=number_format($total_order_amount_online ?? 0, 2); ?></th>
        </tr>
    </table>
    </body>
    </html>
    <?php
}
?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
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
