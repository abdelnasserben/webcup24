@extends('layouts.default')

@section('title', $course->exists ? 'Edition cours' : 'Nouveau un cours')

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">

                <form action="{{ route($course->exists ? 'admin.course.update' : 'admin.course.store', $course)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method($course->exists ? 'PUT' : 'POST')
            
                    <div class="row">
                        <div class="col">
                            @include('shared.input', ['type' => 'file', 'label' => 'Video', 'name' => 'video'])
                        </div>
                        <div class="col">
                            @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $course->title])
                        </div>
                    </div>
                    @include('shared.textarea', ['label' => 'Description', 'name' => 'description', 'value' => $course->description])
                    @include('shared.select', ['label' => 'Catégorie', 'name' => 'category_id', 'value' => $course->category?->id, 'options' => $categories->pluck('name', 'id')])
            
                    <button class="btn btn-primary">{{ $course->exists ? 'Modifier' : 'Créer' }}</button>
            
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
</div>
   
@endsection