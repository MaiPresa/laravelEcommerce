<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="menuContainer">
    <h2>Elige que comer</h2>

    <x-menu />

    <div class="cardContainer">

    </div>
</div>


<script>
  const cardContainer = document.querySelector('.cardContainer');

  fetch('/PHPprojects/ecommerce/public/platos')
    .then(response => response.json())
    .then(data => {
        // Inserta los datos en la lista
        data.map((objeto) => {
        console.log(objeto);
        // Crea un nuevo elemento div para contener el componente
        const container = document.createElement('div');

        // Genera el HTML correspondiente al componente x-card
        container.innerHTML = `<x-card 
            id="${objeto.id_plato}" 
            idPlato="${objeto.id_plato}"
            idCategoria="${objeto.id_categoria}" 
            nombrePlato="${objeto.nombre_plato}" 
            numero="0" 
            imagen="${objeto.imagen}" 
            precio="${objeto.precio}" 
        />`;

        // Agrega el componente al contenedor
        cardContainer.appendChild(container);
        });

        // Pintar datps del json
        // Cargar datos guardados en localstorage?
        // card.Foreach
    }).then((val)=> {

      let form = {};

      // Recupera la cantidad desde el localStorage al cargar la página
      const storedForm = localStorage.getItem("form");
      if (storedForm) {
        form = JSON.parse(storedForm);
      }

      const cards = document.querySelectorAll('.cardFood');
      cards.forEach((card) => {
        const numeroElement = card.querySelector('.numero');
        const restarButton = card.querySelector('.restar');
        const sumarButton = card.querySelector('.sumar');
        
        // Por cada tarjeta recogemos sus atributos
        const id_categoria = parseInt(card.getAttribute('idCategoria'));
        const id_plato = parseInt(card.getAttribute('idPlato')) 
        const nombre_plato = card.getAttribute('nombrePlato');
        const imagen = card.getAttribute('imagen');
        const precio = parseFloat(card.getAttribute('precio'));

        let numero = 0;


        if(form[id_plato]){
            numero = form[id_plato].numero;
            numeroElement.textContent = numero;
            }


        restarButton.addEventListener('click', () => {
            if(numero > 0) {
                numero--;
                numeroElement.textContent = numero;

                // Guarda la cantidad en el localStorage

                form[id_plato] = {numero, id_categoria, nombre_plato, precio, imagen, id_plato};
                localStorage.setItem("form", JSON.stringify(form));


            }
        });

        sumarButton.addEventListener('click', () => {
          numero++;
          numeroElement.textContent = numero;

          // Guarda la cantidad en el localStorage

          form[id_plato] = {numero, id_categoria, nombre_plato, precio, imagen, id_plato};
          localStorage.setItem("form", JSON.stringify(form));

        });

      });

    });
  

</script>
