<link rel="stylesheet" href="{{ asset('css/total-shoping-nav.css') }}">

<div class="totalContainer">

        <div>
            <p>Subtotal</p>
            <p id="subtotal" ></p>
        </div>

        <div>
            <p>IVA</p>
            <p id="iva"></p>
        </div>

        <div>
            <p>Gastos de envío</p>
            <p id="shipping"></p>
        </div>

        <div>
            <p>TOTAL</p>
            <p id="total"></p>
        </div>

        <button onclick="storeForm()" >Realizar compra</button>

</div>


<script>
    

    function storeForm() {
        fetch(window.location.href, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(form)
        })
        .then(response => response.json())
        .then((data) => {
            if(data) {
                deleteCart()
            }
        })
    }


    function updateTotal() {
            let total = 0;
            let iva = 0;
            let subtotal = 0;
            let shipping = 0;



            for (const key in form) {
                if (form.hasOwnProperty(key)) {
                    total += form[key].numero;
                }
            }
            document.getElementById("total").textContent = `${total}€`;

            iva = total/100*21;
            document.getElementById("iva").textContent = `${iva.toFixed(2)}€`;

            subtotal = total-iva;
            document.getElementById("subtotal").textContent = `${subtotal.toFixed(2)}€`;

            if(subtotal >= 10){
                shipping = "Free";
            } else {
                shipping = `${5}€`;
            }

            document.getElementById("shipping").textContent = shipping;


        }

        setTimeout(() => {
            
            updateTotal();
        }, 10);

        setInterval(() => {
            updateTotal();
        }, 2000);
        
</script>
