@extends('layouts.app')

@section('title-page')
    vuoi un nuovo fumetto? CREALO!!
@endsection

@section('main-content')
    @if ($errors->any())
        <div class="alert alert-danger mt-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    @endif
    <form method="POST" action="{{ route('fumetti.store') }}">
        @csrf
        <h1 class="text-center pt-5">Crea un fumetto tutto tuo!</h1>
        <div class="mb-3 mt-5">
            <label class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control  @error('title') is-invalid @enderror" id="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id=""></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input name="thumb" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input name="price" type="number" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Data Di Uscita</label>
            <input name="sale_date" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="title">
        </div>

        <button type="submit" class="btn btn-primary">Crea record</button>
    </form>
@endsection
