<footer class="page-footer font-small">
    <div class='container'>
        <div class='row'>
            <div class='col-4'>
                <h3>GAMEWEB</h3>
            </div>
            <div class='col-4'>
                <p class='footer-copyright text-center py-3'>© 2019 GAMEWEB. Privacy Policy</p>
            </div>
            <div class='col-4 social-media-icons-container'>
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-google"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
</footer>

<div class="gfq-wrap" onClick="window.location.href='?op=cart'">
    <div class="gfq-badge">
        <script>
                let items = JSON.parse(sessionStorage.getItem("shopping_cart"));

                let price = 0;
                for (let i = 0; i < items.length; i++) {

                    let itemArray = items[i];
                    console.log(itemArray);

                        let itemPrice = parseFloat(itemArray[2]);
                        price += itemPrice;

                }
                //document.write(items);
                document.write("€ " + price);

        </script>
    </div>
</div>

<script>
    let arr = [];
    function addItem(id, name, price){
        let newArr = [id, name, price];
        arr.push(newArr);
        // console.log(arr);
        sessionStorage.setItem("shopping_cart", JSON.stringify(arr));
        //console.log(JSON.parse(sessionStorage.getItem("shopping_cart")));
    }

</script>


</body>
</html>