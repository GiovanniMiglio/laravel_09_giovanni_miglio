<x-layout>
<div class="vh-100 d-flex flex-column align-items-center text-white"
     style="background: url('{{ asset('img/homeimg.png') }}') center/cover no-repeat;">

    <h1 class="mt-5 text-dark fs-1">Benvenuti</h1>

    <a href="{{ route('annunci.create') }}" class="btn btn-warning btn-lg fw-bold mt-4">
        Crea annuncio
    </a>

</div>
</x-layout>