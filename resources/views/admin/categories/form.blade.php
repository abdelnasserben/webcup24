@extends('layouts.default')

@section('title', $category->exists ? 'Edition catégorie' : 'Nouvelle catégorie')

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">

                <form action="{{ route($category->exists ? 'admin.category.update' : 'admin.category.store', $category)}}" method="POST">
                    @csrf
                    @method($category->exists ? 'PUT' : 'POST')
            
                    @include('shared.input', ['label' => 'Nom', 'name' => 'name', 'value' => $category->name])
            
                    <button class="btn btn-primary">{{ $category->exists ? 'Modifier' : 'Créer' }}</button>
            
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
</div>
   
@endsection