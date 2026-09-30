<?php
if(!empty($purchase_return)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Purchase Return</title>
    </head>
    <body><br>
    <h3>PURCHASE RETURN LIST</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Supplier</th>
                <th>Product</th>
                <th>Purchase Price</th>
                <th>Purchase Quantity</th>
                <th>Purchase Date</th>
                <th>Return Price</th>
                <th>Return Quantity</th>
                <th>Return Date</th>
        </tr>
        <?php
        if(isset($purchase_return)){
            $total_price = 0;
            $total_quantity = 0;
            foreach ($purchase_return as $key => $value){
                ?>
                <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value['supplier']; ?></td>
                    <td><?=$value['product']; ?></td>
                    <td style="text-align:right">₹ <?=number_format($value['purchase_price'], 2); ?></td>
                    <td><?=$value['purchase_quantity']; ?></td>
                    <td><?= date('d-m-Y',strtotime($value['purchase_date'])); ?></td>
                    <td style="text-align:right">₹ <?=number_format($value['return_price'], 2); ?></td>
                    <td><?=$value['return_quantity']; ?></td>
                    <td><?= date('d-m-Y',strtotime($value['return_date'])); ?></td>
                </tr>
                <?php
                $total_price += $value['return_price'];
                $total_quantity += $value['return_quantity'];
            }
        }
        ?>
        <tr>
            <th colspan="6">Total</th>
            <th style="text-align:right">₹ <?=number_format($total_price ?? 0, 2); ?></th>
            <th><?=$total_quantity ?? 0?></th>
            <th></th>
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
