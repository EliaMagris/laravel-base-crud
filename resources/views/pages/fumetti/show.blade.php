@extends('layouts.app')
{{-- @section('title-page', 'La miglior Pasta - show') --}}
@section('title-page')
    il meglio del meglio:  - {{$elem->title}}
@endsection

@section('main-content')

@if ( session('success') )
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card mt-5 text-white" data-bs-theme="dark" style="width: 18rem;">
    <img src="{{$elem->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$elem->title}}</h5>
      <p class="card-text">{{$elem->description}}</p>
    </div>
  </div>
@endsection