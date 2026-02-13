<x-layout>
    <div class="container-fluid d-flex flex-column justify-content-start align-items-center vh-100 py-5"
         style="background: url('{{ asset('img/homeimg.png') }}') center/cover no-repeat;">

        <h1 class="mb-4 mt-3 text-dark">Prodotti in vendita</h1>

        <div class="row w-75">

            @if ($products->isEmpty())
                <div class="text-center fs-3 mt-5">
                    Nessun annuncio disponibile
                </div>
            @else
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0">
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
                @endforeach
            @endif

        </div>

    </div>
</x-layout>