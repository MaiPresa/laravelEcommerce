<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<nav class="homeNav">
    <h1>Comida Natural</h1>
    <button onclick="gotoCart()" >
        <img src="{{ asset('images/Cart.svg') }}" alt="Cart">
    </button>
</nav>

<script>
    function gotoCart() {
        window.location.href = "{{ url('/carrito') }}";
    }
</script>
