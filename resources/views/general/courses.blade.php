@extends('layouts.default')

@section('title', 'Explorez nos cours')

@section('header-actions')
<div class="d-flex align-items-center flex-wrap py-2">
    <!--begin::Search-->
    <div id="kt_header_search"
       class="header-search d-flex align-items-center w-200px w-md-300px me-2 me-lg-6"
       data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
       data-kt-search-layout="menu" data-kt-search-responsive="" data-kt-menu-trigger="auto"
       data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
       <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
       <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
          <!--begin::Hidden input(Added to disable form autocomplete)-->
          <input type="hidden" />
          <!--end::Hidden input-->
          <!--begin::Icon-->
          <i
             class="ki-duotone ki-magnifier fs-2 text-white search-icon position-absolute top-50 translate-middle-y ms-4"><span
                class="path1"></span>
             <span class="path2"></span>
          </i>
          <!--end::Icon-->
          <!--begin::Input-->
          <input type="text" class="form-control bg-transparent ps-12" name="search" value=""
             placeholder="Search" data-kt-search-element="input" />
          <!--end::Input-->
          <!--begin::Spinner-->
          <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
             data-kt-search-element="spinner">
             <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
          </span>
          <!--end::Spinner-->
          <!--begin::Reset-->
          <span
             class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
             data-kt-search-element="clear">
             <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                <span class="path1"></span>
                <span class="path2"></span>
             </i>
          </span>
          <!--end::Reset-->
       </form>
       <!--end::Form-->
    </div>
    <!--end::Search-->
 </div>

@endsection

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body text-center p-lg-20">
                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-4">

                    @forelse ($courses as $course)
                        
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="img-fluid" src="{{ asset('assets/faq/card-top.jpg')}}" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                              <div class="h3 font-bold text-xl mb-2">{{ $course->title}}</div>
                              <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                              </p>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <a class="btn btn-sm btn-dark" href="{{ route('general.course.show', ['slug' => $course->getSlug(), 'course' => $course])}}">Regarder</a>
                            </div>
                          </div>
                    @empty
                        <p class="text-center text-muted">Aucun cours disponible</p>
                    @endforelse
                </div>

                {{ $courses->links()}}
            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
</div>
@endsection
