@extends('layouts.app')
@section('title-page', 'trova ciò che fa per te')
@section('main-content')
    <h1>Trova il migliore per te</h1>
    {{-- Tutti i record della tabella pasta --}}
    <div class="py-3">
        <button type="button" class="btn btn-primary "><a class="text-white text-decoration-none"
                href="{{ route('fumetti.create') }}">Crea dei fumetti</a></button>

    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $elem)
                <div class="col-3">

                    <div class="card h-100" data-bs-theme="dark" style="width: 18rem;">
                        <img src="{{ $elem->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">

                            <h5 class="card-title text-white">{{ $elem->title }}</h5>
                            {{-- <p class="card-text">{!! $elem->description !!}</p> --}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $elem->price }}</li>
                            <li class="list-group-item">{{ $elem->series }}</li>
                            <li class="list-group-item">{{ $elem->sale_date }}</li>
                            <li class="list-group-item">{{ $elem->type }}</li>
                        </ul>
                        <div class="card-body">
                            <form action="{{ route('fumetti.destroy', $elem->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-4" type="submit">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                            <a href="{{ route('fumetti.show', $elem->id) }}" class="card-link p-2"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('fumetti.edit', $elem->id) }}" class="card-link p-2"><i
                                    class="fa-solid fa-pen"></i></a>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <div class="pt-2">{{ $comics->links() }}</div>
@endsection
