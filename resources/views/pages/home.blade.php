<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="menuContainer">
    <h2>Elige que comer</h2>

    <x-menu />

    <div class="cardContainer">
        <x-card key=1 dataId="desayuno" title="Hamburguesade sayuno"/>
        <x-card key=2 dataId="desayuno" title="Otra hamburguesa desayuno" />
        <x-card key=3 dataId="postre" title="Hamburguesa postre" />
    </div>
</div>


<script>
  const cards = document.querySelectorAll('.cardFood');


  let form = {};

// Recupera la cantidad desde el localStorage al cargar la página
  const storedForm = localStorage.getItem("form");
  if (storedForm) {
    form = JSON.parse(storedForm);
  }


  cards.forEach((card) => {
    const numeroElement = card.querySelector('.numero');
    const restarButton = card.querySelector('.restar');
    const sumarButton = card.querySelector('.sumar');
    
    // Por cada tarjeta recogemos sus atributos
    const dataId = card.getAttribute('data-id'); 
    const cardId = card.getAttribute('id'); 
    const title = card.getAttribute('title');

    let numero = 0;


    if(form[cardId]){
      numero = form[cardId].numero;
      numeroElement.textContent = numero;
    }


    restarButton.addEventListener('click', () => {
        if(numero > 0) {
            numero--;
            numeroElement.textContent = numero;

            // Guarda la cantidad en el localStorage

            form[cardId] = { numero, dataId, title};
            localStorage.setItem("form", JSON.stringify(form));


        }
    });

    sumarButton.addEventListener('click', () => {
      numero++;
      numeroElement.textContent = numero;

      // Guarda la cantidad en el localStorage

            form[cardId] = {numero, dataId, title};
            localStorage.setItem("form", JSON.stringify(form));

    });

  });
</script>
