<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <title>Pertamina</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://index.html" />
    <link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" class="header">
                    <div class="header-top d-flex align-items-stretch flex-grow-1" style="background-color: white;">
                        <div class="d-flex container-xxl align-items-stretch">
                            <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                                <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <a href="index.html" class="d-flex align-items-center">
                                    <img alt="Logo" src="{{asset('admin/assets/media/logos/logo-1.png')}}" width="30%" height="auto" />
                                </a>
                            </div>
                            <div class="d-flex align-items-center flex-row-auto">
                                <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                    <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <div class="symbol symbol-30px symbol-md-40px">
                                            <img src="{{asset('admin/assets/media/avatars/300-1.jpg')}}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                        <div class="d-lg-flex container-xxl w-100">
                            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                                <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                                    <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                            <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Dashboards</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Master Data</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Mapping Data</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Realisasi Penelitian</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Laporan</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Manajemen Pelatihan</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <a href="">
                                                        <span class="menu-link py-3">
                                                            <span class="menu-title">Logout</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbar py-3 py-lg-6" id="kt_toolbar">
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
                        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3 bg-white border border-dark pe-12 p-2">Laporan Sertifikasi</h1>
                        </div>
                        <div class="d-flex flex-column align-items-start">
                            <span class="mb-2">
                                <span class="text-muted fw-semibold me-1">Login Sebagai</span>
                                <span class="text-primary fw-bold">Admin</span>
                            </span>
                            <span class="mb-2">
                                <span class="text-muted fw-semibold me-1">Role</span>
                                <span class="text-primary fw-bold">Administrator</span>
                            </span>
                            <span class="mb-2">
                                <span class="text-muted fw-semibold me-1">Direktorat</span>
                                <span class="text-primary fw-bold">PT Kilang Pertamina Internasional</span>
                            </span>
                            <span class="mb-2">
                                <span class="text-muted fw-semibold me-1">Perusahaan</span>
                                <span class="text-primary fw-bold">PT Kilang Pertamina Intl</span>
                            </span>
                            <span class="mb-2">
                                <span class="text-muted fw-semibold me-1">Bagian</span>
                                <span class="text-primary fw-bold">HC Business Partner</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Toolbar-->
                <!--begin::Container-->
                @yield('content')
                <!--end::Container-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 d-flex flex-column">
                            <li>
                                <h5> Human Capital</h5>
                            </li>
                            <li>
                                <p>
                                    PT. Kilang Pertamina Internasional Refenery Unit II <br>
                                    JL Raya Kilang Putri Tujuh, 28815, Tj. Palas, Dumai Timur, <br>
                                    Kota Dumai, Riau <br>
                                    Phone : (0765) 31244
                                </p>
                            </li>
                        </ul>
                        <!--end::Menu-->
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">Copyright&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">PT KPI</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>
    <script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Custom Javascript-->

</body>
<!--end::Body-->

</html>