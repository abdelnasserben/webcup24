@extends('admin.base')

@section('title', 'Cours details')

@section('content')
    <h1>{{ $course->title }}</h1>
    @if ($course->video)
        <video src="{{ $course->getVideoUrl()}}" controls mute></video>         
    @endif
    <p>{{ $course->description }}</p>

    <hr>

    <h5>Commentaires</h5>

    @foreach ($course->comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach

    <form action="{{ route('comment') }}" method="post">
        @csrf
        @include('shared.textarea', ['label' => 'Commentaire', 'name' => 'content', 'value' => ''])
        @include('shared.input', ['type' => 'hidden', 'name' => 'course_id', 'value' => $course->id])
        <button class="btn btn-sm btn-primary">Commenter</button>
    </form>
@endsection