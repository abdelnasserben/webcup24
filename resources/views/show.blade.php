@extends('layouts.base')

@section('content')
<div class="container mt-4 text-center">
    <h1>{{ $post->title }}</h1>

    <hr class="mb-5">

    <img src="https://cdn.pixabay.com/photo/2023/08/24/21/02/insect-8211593_640.jpg" height="350" class="card-img-top" alt="...">
    <p class="my-4">{{ $post->content }}</p>
    <p class="fs-6 text-gray">Dernière modification: {{ date_format($post->updated_at, 'd/m/Y') }}</p>
    <a href="" class="btn btn-primary me-2">Edition</a>
    <a href="" class="btn btn-danger">Suppression</a>
</div>
@endsection