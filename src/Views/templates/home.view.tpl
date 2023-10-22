<h1>Ofertas del Día</h1>
<div class="card-container">
    {{foreach productsOnSale}}
    <div class="product card" data-productId="{{productId}}">
        <div class="card-img">
            <img src="{{productImgUrl}}" alt="{{productName}}">
        </div>
        <div class="body">
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <div class="price">
                <span class="price">{{productPrice}}</span>
            </div>
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>
    {{endfor productsOnSale}}
</div>
<h1>Destacados</h1>
<div class="card-container">
    {{foreach productsHighlighted}}
    <div class="product card" data-productId="{{productId}}">
        <div class="card-img">
            <img src="{{productImgUrl}}" alt="{{productName}}">
        </div>
        <div class="body">
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <div class="price">
                <span class="price">{{productPrice}}</span>
            </div>
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>
    {{endfor productsHighlighted}}
</div>
<h1>Novedades</h1>
<div class="card-container">
    {{foreach productsNew}}
    <div class="product card" data-productId="{{productId}}">
        <div class="card-img">
            <img src="{{productImgUrl}}" alt="{{productName}}">
        </div>
        <div class="body">
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>

            <div class="price">
                <span class="price">{{productPrice}}</span>
            </div>
        </div>
        <button class="add-to-cart">Agregar al Carrito</button>
    </div>
    {{endfor productsNew}}
</div>