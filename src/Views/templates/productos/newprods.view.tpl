<section class="card-container">
    {{foreach productos}}
        <div class="card">
            <div class="card-img">
                <img src="{{img_url}}" alt="{{name}}">
            </div>
            <div class="body">
                <h2>{{name}}</h2>
                <div class="price">
                    <p>{{price}}</p>
                </div>
            </div>
        </div>
    {{endfor productos}}
</section>

