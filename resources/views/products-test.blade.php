<div>greeting</div>
<div>
    @foreach ($products as $product)
        <div>
            <h3>{{ $product['name'] }}</h3>
            <p>{{ $product['price'] }}</p>
        </div>
    @endforeach
</div>
