<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>| Keenthemes</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('frontend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/media/logos/favicon.ico') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('frontend/assets/media/logos/logo-letter-1.png') }}"
                class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                            <path
                                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!--begin::Menu Container-->
                    <x-frontend.sidebar></x-frontend.sidebar>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Aside Toggle-->
                            <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                                <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Align-left.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16"
                                                height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16"
                                                height="2" rx="1" />
                                            <path
                                                d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </button>
                            <!--end::Aside Toggle-->
                            <!--begin::Logo-->
                            <a href="#">
                                <img alt="Logo" src="{{ asset('frontend/assets/media/logos/logo-letter-1.png') }}"
                                    class="logo-sticky max-h-35px" />
                            </a>
                            <!--end::Logo-->
                            <!--begin::Desktop Search-->
                            <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
                                <!--begin::Form-->
                                <form method="get" class="quick-search-form">
                                    <div class="input-group rounded bg-light">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control h-45px" placeholder="Search..." />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->
                                <!--begin::Search Toggle-->
                                <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px">
                                </div>
                                <!--end::Search Toggle-->
                                <!--begin::Dropdown-->
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350"
                                        data-mobile-height="200"></div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Desktop Search-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <x-frontend.topbar></x-frontend.topbar>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                        <div
                            class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center mr-1">
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"></h2>
                                    <!--end::Page Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul
                                        class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                                        <li class="breadcrumb-item text-muted">
                                            <a href="" class="text-muted">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item text-muted">
                                            <a href="" class="text-muted">Full-width</a>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            @yield('konten')
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pr-3 pl-0">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="nav-link pl-3 pr-0">Contact</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::Notifications Panel-->
    <div id="kt_quick_notifications" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between mb-10">
            <h3 class="font-weight-bold m-0">Notifications
                <small class="text-muted font-size-sm ml-2">24 New</small>
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary"
                id="kt_quick_notifications_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Nav-->
            <div class="navi navi-icon-circle navi-spacer-x-0">
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-bell text-success icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                            <div class="text-muted">Reports based on sales</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon2-box text-danger icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">2 new items submited</div>
                            <div class="text-muted">by Grog John</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-psd text-primary icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                            <div class="text-muted">Reports based on sales</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon2-supermarket text-warning icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                            <div class="text-muted">Total 234 items</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                            <div class="text-muted">Fostest is Barry</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                            <div class="text-muted">40% less alerts thar last week</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-notepad text-primary icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                            <div class="text-muted">Most posted 12 time</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-users-1 text-warning icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                            <div class="text-muted">9 photodrapehrs, 7 designer</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon2-box text-info icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                            <div class="text-muted">by Grog John</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon2-download text-success icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                            <div class="text-muted">Mostly PSD end AL concepts</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon2-supermarket text-danger icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                            <div class="text-muted">Total 234 items</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-bell text-primary icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                            <div class="text-muted">Reports based on sales</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="#" class="navi-item">
                    <div class="navi-link rounded">
                        <div class="symbol symbol-50 symbol-circle mr-3">
                            <div class="symbol-label">
                                <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                            <div class="text-muted">Fostest is Barry</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::Notifications Panel-->
    <!--begin::Quick Actions Panel-->
    <x-frontend.quict></x-frontend.quict>
    <!--end::Quick Actions Panel-->
    <!-- begin::User Panel-->
    @if (!empty(session('token')))
        <x-frontend.profile></x-frontend.profile>
    @endif

    <!-- end::User Panel-->
    <!--begin::Quick Panel-->


    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
                        rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Sticky Toolbar-->
    <x-frontend.sticky></x-frontend.sticky>

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scripts.bundle.js') }}"></script>
    @yield('jquery')
    <!--end::Global Theme Bundle-->
</body>
<!--end::Body-->

</html>
