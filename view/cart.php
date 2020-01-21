<?php include 'header.php'; ?>

<!-- eerste sectie-->
<div class="intro">
    <div class="container cart-container">
        <a href="?op=home" class="btn btn-success">Terug</a>
        <h2>Winkelmand</h2>
        <br>
        <br>
        <table class="col-10 table">
            <tr><th>naam</th><th>prijs</th></tr>
        <script>
            let items = JSON.parse(sessionStorage.getItem("shopping_cart"));

            let price = 0;
            for(let i = 0; i < items.length; i++){

                let itemArray = items[i];
                console.log(itemArray);
                for(let j = 0; j < itemArray.length; j++){

                    let itemPrice = parseFloat(itemArray[2]);
                    price += itemPrice;

                    let tablerow = "<tr><td>" + itemArray[1] + "</td><td>€" + parseFloat(itemArray[2]) + "</td><tr>";
                    document.write(tablerow);

                }

            }
        </script>
            <tr><td></td><td>______________</td></tr>
            <tr><td>Totaal:</td><td><script>document.write("€ " + price);</script></td></tr>
        </table>
        <button class="btn btn-primary btn-lg" onClick="alert('Database blah blah')">Betaal</button>
    </div>
</div>

<?php include 'view/footer.php'; ?>