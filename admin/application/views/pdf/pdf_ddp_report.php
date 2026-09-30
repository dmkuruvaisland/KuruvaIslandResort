<?php
if(!empty($order_list)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DDP Report</title>
    </head>
    <body><br>
        <h3>DDP REPORT</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Order Number</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Purchase Amount</th>
            </tr>
            <?php
                $total_item_amount = 0;
                $total_items = 0;
                foreach($order_list as $key => $value){
                    ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$value['order_no']; ?></td>
                            <td><?=$value['name']; ?></td>
                            <td><?=$value['phone']; ?></td>
                            <td><?=$value['order_date']; ?></td>
                            <td><?=$value['product']; ?></td>
                            <td><?=$value['quantity']; ?></td>
                            <td><?=$value['amount']; ?></td>
                        </tr>
                    <?php
                    $total_item_amount += $value['amount'];
                    $total_items += $value['quantity'];
                }
            ?>
            <tr>
                <th colspan="6">Total</th>
                <th><?= $total_items ?></th>
                <th><?= number_format((float)$total_item_amount, 2, '.', '') ?></th>
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
        padding:4px;
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