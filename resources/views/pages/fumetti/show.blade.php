@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
    il meglio del meglio:  - {{$elem->title}}
@endsection

@section('main-content')
    <h1 class="text-center pt-5">{{$elem->title}}</h1>
    <div>
        <p>
            {{$elem->description}}
        </p>
    </div>

@endsection