@extends('layouts.default')

@section('title', 'Gestion des cours')

@section('header-actions')

    <button type="button" class="btn btn-custom btn-color-white btn-active-color-secondary my-2 me-2 me-lg-6" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
        Nouveau cours
    </button>
    
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Nouvelle catégorie</h3>
    
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
    
                <div class="modal-body">
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
            </div>
        </div>
    </div>
@endsection

@section('content')

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">

                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Titre</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-100px">Date de création</th>
                                <th class="min-w-70px text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->title}}</td>
                                <td>
                                    <span class="badge badge-light-success">Active</span>
                                </td>
                                <td>{{ date_format($course->created_at, 'd/m/Y')}}</td>
                                
                                <td>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <a href="{{ route('admin.course.edit', $course) }}" class="btn btn-sm btn-info">Editer</a>
                                        <form action="{{ route('admin.course.destroy', $course)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-sm btn-danger">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>Aucun cours</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                {{ $courses->links() }}
            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
</div>

@endsection