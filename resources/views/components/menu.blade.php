<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<div class="homeMenu">
    <button data-id="desayuno">Desayuno</button>
    <button data-id="comida">Comida</button>
    <button data-id="cena">Cena</button>
    <button data-id="postre">Postre</button>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.homeMenu button');
    const tarjetas = document.querySelectorAll('.cardFood');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            const id = button.dataset.id;
            filtrarTarjetas(id);
        });
    });

    function filtrarTarjetas(id) {
        tarjetas.forEach(tarjeta => {
            if (tarjeta.dataset.id === id) {
                tarjeta.style.display = 'flex';
            } else {
                tarjeta.style.display = 'none';
            }
        });
    }
});
</script>