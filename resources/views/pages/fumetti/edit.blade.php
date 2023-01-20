@extends('layouts.app')

@section('title-page')
    vuoi un nuovo fumetto? CREALO!!
@endsection

@section('main-content')
    <h1 class="text-center pt-5">Crea un fumetto tutto tuo!</h1>

    <form method="POST" action="{{ route('fumetti.update', $comic->id) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input value="{{$comic->title}}" name="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea  name="description" class="form-control" id="">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input value="{{$comic->thumb}}" name="thumb" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input value="{{$comic->price}}" name="price" type="number" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input value="{{$comic->series}}" name="series" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Data Di Uscita</label>
            <input value="{{$comic->sale_date}}" name="sale_date" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input value="{{$comic->type}}" name="type" type="text" class="form-control" id="title">
        </div>

        <button type="submit" class="btn btn-primary">Crea record</button>
    </form>
@endsection
