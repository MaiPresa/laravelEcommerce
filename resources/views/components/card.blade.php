<link rel="stylesheet" href="{{ asset('css/card.css') }}">


<div class="cardFood" id={{$key}} data-id={{$dataId}} title={{$title}} numero={{$numero}}>
    <img src="{{ asset('images/fotoFastFood.jpg') }}" alt="Foto Hamburguesa">
    <div class="foodInfo">
        <div class="titleContainer">
            <h3>{{$title}}</h3>
            <!-- <p>Con patatas</p> -->
        </div>
        <div class="priceContainer">
            <p>8.00€</p>
            <div class="amountButton">
                <button class="restar">-</button><p class="numero">{{$numero}}</p><button class="sumar">+</button>
            </div>
            
        </div>
    </div>
</div>
