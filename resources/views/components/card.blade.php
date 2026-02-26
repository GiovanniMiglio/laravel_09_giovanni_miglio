<div class="col-md-4 mb-4">
    <div class="card shadow-lg border-0">

        @if ($product->img)
            <img src="{{ Storage::url($product->img) }}" 
                 class="card-img-top" 
                 alt="{{ $product->name }}">
        @endif
        <img src=" {{$product->img}}" alt="">
        <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <p class="card-text">{{ $product->description }}</p>

            <p class="fw-bold fs-4 text-success">
                € {{ number_format($product->price, 2, ',', '.') }}
            </p>

            <a href="#" class="btn btn-warning w-100">Dettagli</a>
        </div>
    </div>
</div>