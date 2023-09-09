<link rel="stylesheet" href="{{ asset('css/shopingNavBar.css') }}">

<nav class="shopingNav">
    <button onclick="gotoHome()">< Volver</button>
    <button onclick="deleteCart()" >
        <img src="{{ asset('images/Trash.svg') }}" alt="Trash icon">
    </button>
</nav>


<script>

    function deleteCart() {
        const tarjetas = document.querySelectorAll('.cardFood');

        tarjetas.forEach((tarjeta) => tarjeta.style.display = 'none');
        localStorage.setItem("form", JSON.stringify({}));

        if(form) {
            form = {};
        }
    }

    function gotoHome() {
            window.location.href = "{{ url('/') }}";
        }

</script>
