<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<div class="homeMenu">
    <button data-id="1">Desayuno</button>
    <button data-id="2">Comida</button>
    <button data-id="3">Cena</button>
    <button data-id="4">Postre</button>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.homeMenu button');
    let tarjetas = document.querySelectorAll('.cardFood');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            tarjetas = document.querySelectorAll('.cardFood');
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            const id = button.dataset.id;
            filtrarTarjetas(id);
        });
    });

    function filtrarTarjetas(id) {
        tarjetas.forEach(tarjeta => {
            
            if (tarjeta.getAttribute('idCategoria') === id) {
                tarjeta.style.display = 'flex';
            } else {
                tarjeta.style.display = 'none';
            }
        });
    }
});
</script>