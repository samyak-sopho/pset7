<table class="table table-striped">
    <tr>
        <td>  <b>Name</b>   </td>
        <td>  <b>Symbol</b> </td>
        <td>  <b>Shares</b> </td>
        <td>  <b>Cost</b>   </td>
        <td>  <b>Total Price</b>   </td>
    </tr>
    <?php extract($values);
    //format output to improve readability
    $format_cash = number_format($cash_balance["cash"], 2);
    foreach ($positions as $position): 
        $total_price = $position["shares"] * $position["price"]; 
        $total_price = number_format($total_price, 2); 
        $position["price"] = number_format($position["price"], 2); ?>
    
        <tr>
            <td><?= $position["name"] ?></td>
            <td><?= $position["symbol"] ?></td>
            <td><?= $position["shares"] ?></td>
            <td>$<?= $position["price"] ?></td>
            <td>$<?= $total_price ?></td>
        </tr>

    <?php endforeach ?>
    <tr>
        <td><b>CASH BALANCE</b></td>
        <td colspan="4">$<?= $format_cash ?></td>
    </tr>
</table>