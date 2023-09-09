<link rel="stylesheet" href="{{ asset('css/card.css') }}">


<div class="cardFood" id={{$id_categoria}} idCategoria={{$id_categoria}}  idPlato={{$id_plato}} nombrePlato={{$nombre_plato}} numero={{$numero}} imagen={{$imagen}} precio={{$precio}}>
    <img src="{{ asset($imagen) }}" alt="Foto Hamburguesa">
    <div class="foodInfo">
        <div class="titleContainer">
            <h3>{{$nombre_plato}}</h3>
        </div>
        <div class="priceContainer">
            <p>{{$precio}}€</p>
            <div class="amountButton">
                <button class="restar">-</button><p class="numero">{{$numero}}</p><button class="sumar">+</button>
            </div>
            
        </div>
    </div>
</div>
