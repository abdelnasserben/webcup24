<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
   <title>Ceres HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme - Ceres HTML Free by KeenThemes</title>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
   <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
   <link rel="shortcut icon" href="{{ asset('assets/logos/favicon.ico') }}" type="image/x-icon">

   @yield('header-links')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
   <!--begin::Main-->
   <!--begin::Root-->
   <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
         <!--begin::Wrapper-->
         <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header  align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
               data-kt-sticky-offset="{default: '200px', lg: '300px'}">
               <!--begin::Container-->
               <div class=" container-xxl  d-flex align-items-center">
                  <!--begin::Heaeder menu toggle-->
                  <div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                     <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px"
                        id="kt_header_menu_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span
                              class="path2"></span></i>
                     </div>
                  </div>
                  <!--end::Heaeder menu toggle-->
                  <!--begin::Header Logo-->
                  <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                     <a href="{{ route('general.home') }}">
                        <img alt="Logo" src="{{ asset('assets/logos/default.png')}}"
                           class="h-1px h-sm-35px h-md-50px logo-default" />
                     </a>
                  </div>
                  <!--end::Header Logo-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                     <!--begin::Navbar-->
                     <div class="d-flex align-items-stretch" id="kt_header_nav">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu align-items-stretch" data-kt-drawer="true"
                           data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                           data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '225px'}"
                           data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                           data-kt-swapper="true" data-kt-swapper-mode="prepend"
                           data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                           <!--begin::Menu-->
                           <div
                              class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 px-4 px-lg-0 align-items-stretch"
                              id="#kt_header_menu" data-kt-menu="true">
                              <!--begin:Menu item-->
                              <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion me-lg-1">
                                 <!--begin:Menu link-->
                                 <span class="menu-link py-3">
                                    <span class="menu-title">Catégories</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                 </span>
                                 <!--end:Menu link-->
                                 <!--begin:Menu sub-->
                                 <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">

                                       @foreach ($categories as $category)
                                           <!--begin:Menu link-->
                                          <a class="menu-link py-3" href="{{ route('general.courses') }}">
                                             <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">{{ $category->name }}</span>
                                          </a>
                                          <!--end:Menu link-->
                                       @endforeach
                                    </div>
                                 </div>
                                 <!--end:Menu sub-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                 <!--begin:Menu link-->
                                 <span class="menu-link py-3">
                                    <span class="menu-title">Entreprise</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                 </span>
                                 <!--end:Menu link-->
                                 <!--begin:Menu sub-->
                                 <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                       <!--begin:Menu link-->
                                       <a class="menu-link py-3" href="{{ route('general.courses') }}">
                                          <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Nos Cours</span>
                                       </a>
                                       <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                       <!--begin:Menu link-->
                                       <a class="menu-link py-3" href="{{ route('general.pricing') }}">
                                          <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Tarifs</span>
                                       </a>
                                       <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                       <!--begin:Menu link-->
                                       <a class="menu-link py-3" href="{{ route('general.faq') }}">
                                          <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">FAQ</span>
                                       </a>
                                       <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                 </div>
                                 <!--end:Menu sub-->
                              </div>
                              <!--end:Menu item-->
                           </div>
                           <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                     </div>
                     <!--end::Navbar-->
                     <!--begin::Topbar-->
                     <div class="d-flex align-items-stretch flex-shrink-0">
                        <!--begin::Toolbar wrapper-->
                        <div class="topbar d-flex align-items-stretch flex-shrink-0">
                           <!--begin::Theme mode-->
                           <div class="d-flex align-items-center ms-2 ms-lg-3">
                              <!--begin::Menu toggle-->
                              <a href="#"
                                 class="btn btn-icon btn-custom btn-active-light w-35px h-35px w-md-40px h-md-40px"
                                 data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                 <i class="ki-duotone ki-night-day theme-light-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                 </i>
                                 <i class="ki-duotone ki-moon theme-dark-show fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                 </i>
                              </a>
                              <!--begin::Menu toggle-->
                              <!--begin::Menu-->
                              <div
                                 class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                 data-kt-menu="true" data-kt-element="theme-mode-menu">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
                                       <span class="menu-icon" data-kt-element="icon">
                                          <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span></i>
                                       </span>
                                       <span class="menu-title">
                                          Light
                                       </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                       <span class="menu-icon" data-kt-element="icon">
                                          <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                       </span>
                                       <span class="menu-title">
                                          Dark
                                       </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
                                       <span class="menu-icon" data-kt-element="icon">
                                          <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i>
                                       </span>
                                       <span class="menu-title">
                                          System
                                       </span>
                                    </a>
                                 </div>
                                 <!--end::Menu item-->
                              </div>
                              <!--end::Menu-->
                           </div>
                           <!--end::Theme mode-->
                           <!--begin::User-->
                           <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                              <!--begin::Menu wrapper-->
                              <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                 @guest
                                 <i class="ki-duotone ki-user fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                 </i>
                                 @endguest
                                  @auth
                                       <img alt="Logo" src="{{ asset('assets/avatars/300-2.jpg')}}" />
                                 @endauth
                              </div>
                              <!--begin::User account menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                 data-kt-menu="true">
                                 
                                 @auth
                                     <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <div class="menu-content d-flex align-items-center px-3">
                                          <!--begin::Avatar-->
                                          <div class="symbol symbol-50px me-5">
                                             <img alt="Logo" src="{{ asset('assets/avatars/300-2.jpg')}}" />
                                          </div>
                                          <!--end::Avatar-->
                                          <!--begin::Username-->
                                          <div class="d-flex flex-column">
                                             <div class="fw-bold d-flex align-items-center fs-5">
                                                Max Smith
                                             </div>
                                             <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                max@kt.com </a>
                                          </div>
                                          <!--end::Username-->
                                       </div>
                                    </div>
                                    <!--end::Menu item-->
                                    

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                       <a href="{{ route('dashboard') }}" class="menu-link px-5">
                                          Dashboard
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                       <a href="{{ route('profile.edit') }}" class="menu-link px-5">
                                          Mon Profil
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                       ata-kt-menu-placement="right-start">
                                       <a href="#" class="menu-link px-5">
                                          <span class="menu-title">Administration</span>
                                          <span class="menu-arrow"></span>
                                       </a>
                                       <!--begin::Menu sub-->
                                       <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ route('admin.course.index') }}" class="menu-link px-5">Cours</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ route('admin.category.index') }}" class="menu-link px-5">Catégories</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <form  class="menu-item px-5" method="POST" action="{{ route('logout') }}">
                                       @csrf
                                       <button class="menu-link px-5 btn btn-reset w-100" type="submit">Se déconnecter</button>
                                   </form>
                                    <!--end::Menu item-->
                                 @endauth
                                 
                                 @guest
                                     <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                       <a href="{{ route('login') }}" class="menu-link px-5">
                                          Se connecter
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                       <a href="{{ route('register') }}" class="menu-link px-5">
                                          S'inscrire
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                 @endguest
                              </div>
                              <!--end::User account menu-->
                              <!--end::Menu wrapper-->
                           </div>
                           <!--end::User -->
                           <!--begin::Aside mobile toggle-->
                           <!--end::Aside mobile toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                     </div>
                     <!--end::Topbar-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Toolbar-->
            <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
               <!--begin::Container-->
               <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap">
                  <!--begin::Page title-->
                  <div class="page-title d-flex flex-column">
                     <!--begin::Title-->
                     <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                        @yield('title')
                     </h1>
                     <!--end::Title-->
                  </div>
                  <!--end::Page title-->
                  <!--begin::Actions-->
                  @yield('header-actions')
                  <!--end::Actions-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Container-->
            @yield('content')
            <!--end::Container-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
               <!--begin::Container-->
               <div class=" container-xxl  d-flex flex-column flex-md-row align-items-center justify-content-between">
                  <!--begin::Copyright-->
                  <div class="text-dark order-2 order-md-1">
                     <span class="text-muted fw-semibold me-1">Tous droits résérvés 2024&copy;</span>
                     <a href="" target="_blank"
                        class="text-gray-800 text-hover-primary">OHO</a>
                  </div>
                  <!--end::Copyright-->
                  <!--begin::Menu-->
                  <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                     <li class="menu-item">
                        <a href="{{ route('general.about') }}"
                           class="menu-link px-2">A propos</a>
                        </li>
                     <li class="menu-item">
                        <a href="{{ route('general.contact') }}"
                           class="menu-link px-2">Contact</a>
                        </li>
                     <li class="menu-item">
                        <a href=""
                           class="menu-link px-2">Conditions GU</a></li>
                  </ul>
                  <!--end::Menu-->
               </div>
               <!--end::Container-->
            </div>
            <!--end::Footer-->
         </div>
         <!--end::Wrapper-->
      </div>
      <!--end::Page-->
   </div>
   <!--end::Root-->
   <!--end::Main-->



   <!--begin::Javascript-->
   <!--begin::Custom Javascript(used for this page only)-->
   <script src="{{ asset('js/plugins.bundle.js') }}"></script>
   <script src="{{ asset('js/scripts.bundle.js') }}"></script>
   <!--end::Custom Javascript-->
   <!--end::Javascript-->
</body>
<!--end::Body-->

</html>