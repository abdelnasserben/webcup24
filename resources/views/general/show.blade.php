@extends('layouts.default')

@section('title', $course->title)

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">
                @if ($course->video)
                    <div class="card-body">
                        <video class="img-fluid" src="{{ $course->getVideoUrl()}}" controls mute></video>    
                    </div>     
                @endif

                <div class="my-5"></div>

                <div class="badge badge-info badge-lg mb-5">{{$course->category->name}}</div>

                <div class="bg-light p-5 border-radius">
                    <h2 class="fs-1 mb-5">Description</h2>
                    <p>{{ $course->description }}</p>

                    <h2 class="fs-1 mb-5">Commentaires</h2>
                    
                    @foreach ($course->comments as $comment)
                        <div class="d-flex  gap-4 py-5 border-bottom">
                            <div class="cursor-pointer symbol symbol-35px symbol-md-40px">
                                <img alt="Logo" src="{{asset('assets/avatars/300-2.jpg')}}">
                            </div>
                            <div>
                                <h4>{{$comment->user?->name }}</h4>
                                <p class="small">{{ date_format($comment->created_at, 'Y-m-d H:m')}}</p>
                                <p class="small">{{ $comment->content }}</p>
                            </div>
                        </div>
                    @endforeach

                    @auth
                        
                    <form action="{{ route('comment') }}" method="post">
                        @csrf
                        @include('shared.textarea', ['label' => '', 'name' => 'content', 'value' => ''])
                        @include('shared.input', ['type' => 'hidden', 'name' => 'course_id', 'value' => $course->id])
                        @include('shared.input', ['type' => 'hidden', 'name' => 'user_id', 'value' => Auth::user()->id])
                        <button class="btn btn-sm btn-dark">Commenter</button>
                    </form>
                    @endauth
                </div>
                
            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
</div>
@endsection