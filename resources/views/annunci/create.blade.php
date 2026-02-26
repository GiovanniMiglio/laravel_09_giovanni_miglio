<x-layout>
<div class="container-fluid d-flex flex-column justify-content-start align-items-center vh-100 py-5 "style="background: url('{{ asset('img/homeimg.png') }}') center/cover no-repeat;">
<h1 class="mb-4 mt-3 justify-content-center d-flex">Crea un nuovo annuncio</h1>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<form class="bgcustom justify-content-center align-items-center p-4 rounded fs-3" style="width: 50%;" action="{{ route('annunci.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
<label for="img" class="form-label">Immagine dell'articolo</label>
<input type="file" class="form-control" id="img" name="img" value="{{ old('img') }}">
</div>
<div class="mb-3">
<label for="name" class="form-label">Nome dell'articolo</label>
<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="description" class="form-label">Descrizione dell'articolo</label>
<textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="price" class="form-label">Prezzo dell'articolo</label>
<div class="input-group">
<span class="input-group-text">€</span>
<input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price') }}">
</div>
@error('price')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>



<button class="btn btn-warning d-flex mx-auto ">Pubblica annuncio</button>
</form>
</div>
</x-layout>