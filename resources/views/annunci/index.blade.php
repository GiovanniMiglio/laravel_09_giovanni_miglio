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
                    <x-card :product="$product" />
                @endforeach
            @endif

        </div>

    </div>
</x-layout>