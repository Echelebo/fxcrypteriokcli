<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-mode="dark" data-topbar="dark" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">


<!-- Mirrored from themesdesign.in/tailwick/html-dark/dashboards-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:16:53 GMT -->
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#07030c">
    <meta name="theme-color" content="#07030c">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <link rel="icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <title> {{ $page_title }} | {{ site('name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- material icon cdn --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- sweet alert css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    {{-- datatable cdn  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.7/css/scroller.dataTables.min.css">

    {{-- owl carrousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    
    
    <!-- Layout config Js -->
    <script src="/assts/js/layout.js"></script>
    <!-- Icons CSS -->
    
    <!-- Tailwind CSS -->
    

  <link rel="stylesheet" href="/assts/css/tailwind2.css">
  
  <style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

</head>

<body class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    
    <div class="app-menu w-vertical-menu bg-vertical-menu ltr:border-r rtl:border-l border-vertical-menu-border fixed bottom-0 top-0 z-[1003] transition-all duration-75 ease-linear group-data-[sidebar-size=md]:w-vertical-menu-md group-data-[sidebar-size=sm]:w-vertical-menu-sm group-data-[sidebar-size=sm]:pt-header group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:border-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=brand]:border-vertical-menu-brand group-data-[sidebar=modern]:bg-gradient-to-tr group-data-[sidebar=modern]:to-vertical-menu-to-modern group-data-[sidebar=modern]:from-vertical-menu-form-modern group-data-[layout=horizontal]:w-full group-data-[layout=horizontal]:bottom-auto group-data-[layout=horizontal]:top-header hidden md:block print:hidden group-data-[sidebar-size=sm]:absolute group-data-[sidebar=modern]:border-vertical-menu-border-modern group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:border-t group-data-[layout=horizontal]:dark:border-zink-500 group-data-[layout=horizontal]:border-r-0 group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=dark]:dark:border-zink-600 group-data-[layout=horizontal]:group-data-[navbar=scroll]:absolute group-data-[layout=horizontal]:group-data-[navbar=bordered]:top-[calc(theme('spacing.header')_+_theme('spacing.4'))] group-data-[layout=horizontal]:group-data-[navbar=bordered]:inset-x-4 group-data-[layout=horizontal]:group-data-[navbar=hidden]:top-0 group-data-[layout=horizontal]:group-data-[navbar=hidden]:h-16 group-data-[layout=horizontal]:group-data-[navbar=bordered]:w-[calc(100%_-_2rem)] group-data-[layout=horizontal]:group-data-[navbar=bordered]:[&.sticky]:top-header group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-md group-data-[layout=horizontal]:shadow-md group-data-[layout=horizontal]:shadow-slate-500/10 group-data-[layout=horizontal]:dark:shadow-zink-500/10 group-data-[layout=horizontal]:opacity-0">
        <div class="flex items-center justify-center px-5 text-center h-header group-data-[layout=horizontal]:hidden group-data-[sidebar-size=sm]:fixed group-data-[sidebar-size=sm]:top-0 group-data-[sidebar-size=sm]:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-gradient-to-br group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:to-vertical-menu-to-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:from-vertical-menu-form-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-vertical-menu-modern group-data-[sidebar-size=sm]:z-10 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_-_1px)] group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:dark:bg-zink-700">
            <a href="/" class="group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden group-data-[sidebar=modern]:hidden">
                <span class="hidden group-data-[sidebar-size=sm]:block">
                    <img src="" alt="" class="h-6 mx-auto">
                </span>
                <span class="group-data-[sidebar-size=sm]:hidden">
                    <img src="/assts/images/logo-dark.png" alt="" class="h-6 mx-auto">
                </span>
            </a>
            <a href="/" class="hidden group-data-[sidebar=dark]:block group-data-[sidebar=brand]:block group-data-[sidebar=modern]:block">
                <span class="hidden group-data-[sidebar-size=sm]:block">
                    <img src="/assts/images/loader.png" alt="" class="h-6 mx-auto">
                </span>
                <span class="group-data-[sidebar-size=sm]:hidden">
                    <img src="/assts/images/logo-light.png" alt="" class="h-6 mx-auto">
                </span>
            </a>
            <button type="button" class="hidden p-0 float-end" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
    
        <div id="scrollbar" class="group-data-[sidebar-size=md]:max-h-[calc(100vh_-_theme('spacing.header')_*_1.2)] group-data-[sidebar-size=lg]:max-h-[calc(100vh_-_theme('spacing.header')_*_1.2)] group-data-[layout=horizontal]:h-56 group-data-[layout=horizontal]:md:h-auto group-data-[layout=horizontal]:overflow-auto group-data-[layout=horizontal]:md:overflow-visible group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:mx-auto">
            <div>
                <ul class="group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:flex-col group-data-[layout=horizontal]:md:flex-row" id="navbar-nav">
                    <li class="px-4 py-1 text-vertical-menu-item group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern uppercase font-medium text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center group-data-[sidebar=dark]:dark:text-zink-200"><span data-key="t-menu">Menu</span></li>
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative dropdown-button-x flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.dashboard') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="monitor-dot" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-dashboards">Dashboards</span> 
                        </a>
                        
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative dropdown-button-x flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.deposits.index') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="picture-in-picture-2" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-landing-page">Deposit</span>
                        </a>
                        
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.bots.index') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="messages-square" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-chat">Portfolio</span>
                        </a>
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.withdrawals.index') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="mail" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-email">Withdraw</span>
                        </a>
                    </li>
                    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.initiate.walletconnect') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="mail" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-email">Wallet Connect</span>
                        </a>
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative dropdown-button-x flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.transfers.index') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="calendar-days" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-calendar">P2P</span>
                        </a>
                        
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative dropdown-button-x flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.referrals') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="shopping-bag" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-ecommerce">My Referrals</span>
                        </a>
                        
                    </li>
    
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        <a class="relative dropdown-button-x flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0" href="{{ route('user.transactions.index') }}">
                            <span class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"><i data-lucide="circuit-board" class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i></span> <span class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden" data-key="t-hr-management">My Transactions</span>
                        </a>
                    </li>
    
                    
    
                
    
                
                    
                    
    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                
                    <li class="relative group-data-[layout=horizontal]:shrink-0 group/sm">
                        
                        <div class="dropdown-content group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_*_2.8)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=modern]:bg-transparent group-data-[layout=horizontal]:md:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:md:w-44 group-data-[layout=horizontal]:py-2 group-data-[layout=horizontal]:rounded-b-md group-data-[layout=horizontal]:md:shadow-lg group-data-[layout=horizontal]:md:shadow-slate-500/10 group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:dark:md:shadow-zink-600/20 hidden group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:ltr:rounded-br-md group-data-[sidebar-size=sm]:rtl:rounded-br-md group-data-[sidebar-size=sm]:shadow-lg group-data-[sidebar-size=sm]:shadow-slate-700/10 group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:to-vertical-menu-to-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:from-vertical-menu-from-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-gradient-to-tr">
                            <ul class="ltr:pl-[1.75rem] rtl:pr-[1.75rem] group-data-[sidebar-size=md]:ltr:pl-0 group-data-[sidebar-size=md]:rtl:pr-0 group-data-[sidebar-size=sm]:ltr:pl-0 group-data-[sidebar-size=sm]:rtl:pr-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:ltr:pl-0 group-data-[layout=horizontal]:rtl:pr-0">
                                
                                <li class="group-data-[layout=horizontal]:relative group/sub1 relative">
                                    
                                    <div class="dropdown-content group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_*_2.8)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=modern]:bg-transparent group-data-[layout=horizontal]:md:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:lg:w-44 group-data-[layout=horizontal]:py-2 group-data-[layout=horizontal]:rounded-b-md group-data-[layout=horizontal]:md:shadow-lg group-data-[layout=horizontal]:shadow-slate-500/10 group-data-[layout=horizontal]:left-full group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:group-hover/sub:block group-data-[sidebar-size=sm]:ltr:left-full group-data-[sidebar-size=sm]:rtl:right-full group-data-[sidebar-size=sm]:top-0 group-data-[sidebar-size=sm]:shadow-lg group-data-[sidebar-size=sm]:shadow-slate-700/5 group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:dark:shadow-zink-600/20 group-data-[layout=horizontal]:z-10 hidden">
                                        <ul class="ltr:pl-[1.75rem] rtl:pr-[1.75rem] group-data-[sidebar-size=md]:ltr:pl-0 group-data-[sidebar-size=md]:rtl:pr-0 group-data-[sidebar-size=sm]:ltr:pl-0 group-data-[sidebar-size=sm]:rtl:pr-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:ltr:md:pl-0 group-data-[layout=horizontal]:rtl:md:pr-0">
                                            
                                            <li class="group-data-[layout=horizontal]:relative group/sub2 relative">
                                                
                                                <div class="dropdown-content group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_*_2.8)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=modern]:bg-transparent group-data-[layout=horizontal]:md:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:lg:w-44 group-data-[layout=horizontal]:py-2 group-data-[layout=horizontal]:rounded-b-md group-data-[layout=horizontal]:md:shadow-lg group-data-[layout=horizontal]:shadow-slate-500/10 group-data-[layout=horizontal]:left-full group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:group-hover/sub:block group-data-[sidebar-size=sm]:ltr:left-full group-data-[sidebar-size=sm]:rtl:right-full group-data-[sidebar-size=sm]:top-0 group-data-[sidebar-size=sm]:shadow-lg group-data-[sidebar-size=sm]:shadow-slate-700/5 group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:dark:shadow-zink-600/20 group-data-[layout=horizontal]:z-10 hidden">
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
    <div id="sidebar-overlay" class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"></div><header id="page-topbar" class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm group-data-[layout=horizontal]:ltr:left-0 group-data-[layout=horizontal]:rtl:right-0 fixed right-0 z-[1000] left-0 print:hidden group-data-[navbar=bordered]:m-4 group-data-[navbar=bordered]:[&.is-sticky]:mt-0 transition-all ease-linear duration-300 group-data-[navbar=hidden]:hidden group-data-[navbar=scroll]:absolute group/topbar group-data-[layout=horizontal]:z-[1004]">
        <div class="layout-width">
            <div class="flex items-center px-4 mx-auto bg-topbar border-b-2 border-topbar group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand shadow-md h-header shadow-slate-200/50 group-data-[navbar=bordered]:rounded-md group-data-[navbar=bordered]:group-[.is-sticky]/topbar:rounded-t-none group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-700 dark:shadow-none group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-zink-500 group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-md group-data-[navbar=bordered]:shadow-none group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-none group-data-[layout=horizontal]:shadow-none group-data-[layout=horizontal]:dark:group-[.is-sticky]/topbar:shadow-none">
                <div class="flex items-center w-full group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl navbar-header group-data-[layout=horizontal]:ltr:xl:pr-3 group-data-[layout=horizontal]:rtl:xl:pl-3">
                    <!-- LOGO -->
                    <div class="items-center justify-center hidden px-5 text-center h-header group-data-[layout=horizontal]:md:flex group-data-[layout=horizontal]:ltr::pl-0 group-data-[layout=horizontal]:rtl:pr-0">
                        <a href="/">
                            <span class="hidden">
                                <img src="" alt="" class="h-6 mx-auto">
                            </span>
                            <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                                <img src="/assts/images/logo-dark.png" alt="" class="h-6 mx-auto">
                            </span>
                        </a>
                        <a href="/" class="hidden group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                            <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                                <img src="" alt="" class="h-6 mx-auto">
                            </span>
                            <span class="group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                                <img src="/assts/images/logo-light.png" alt="" class="h-6 mx-auto">
                            </span>
                        </a>
                    </div>
    
                    <button type="button" class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-75 ease-linear bg-topbar rounded-md btn hover:bg-slate-100 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:border-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:md:hidden hamburger-icon" id="topnav-hamburger-icon">
                        <i data-lucide="chevrons-left" class="w-5 h-5 group-data-[sidebar-size=sm]:hidden"></i>
                        <i data-lucide="chevrons-right" class="hidden w-5 h-5 group-data-[sidebar-size=sm]:block"></i>
                    </button>
    
                    <div class="relative hidden ltr:ml-3 rtl:mr-3 lg:block group-data-[layout=horizontal]:hidden group-data-[layout=horizontal]:lg:block">
                        <input type="text" class="py-2 pr-4 text-sm text-topbar-item bg-topbar border border-topbar-border rounded pl-8 placeholder:text-slate-400 form-control focus-visible:outline-0 min-w-[300px] focus:border-blue-400 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-border-dark group-data-[topbar=dark]:placeholder:text-slate-500 group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-border-brand group-data-[topbar=brand]:placeholder:text-blue-300 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-500 group-data-[topbar=dark]:dark:text-zink-100" placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search" class="inline-block size-4 absolute left-2.5 top-2.5 text-topbar-item fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:fill-zink-600"></i>
                    </div>
    
                    <div class="flex gap-3 ms-auto">
                        <div class="relative flex items-center dropdown h-header">
                            <button type="button" class="inline-flex justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:text-zink-500 group-data-[topbar=dark]:dark:hover:text-zink-50" id="flagsDropdown" data-bs-toggle="dropdown">
                                <img src="/assts/images/us.svg" alt="" id="header-lang-img-x" class="h-5 rounded-sm">
                            </button>
                            <select onchange="doGTranslate(this);" class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[10rem] flex flex-col gap-4 dark:bg-zink-600">
                                <option value="en|en" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/us.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">English</h6>
                                </option>
                                <option value="en|es" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/es.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Spanish</h6>
                                </option>
                                <option value="en|de" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/de.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">German</h6>
                                </option>
                                <option value="en|fr" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/fr.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">French</h6>
                                </option>
                                <option value="en|ja" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/jp.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Japanese</h6>
                                </option>
                                <option value="en|zh-CN" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/china.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Chinese</h6>
                                </option>
                                <option value="en|it" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/it.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Italian</h6>
                                </option>
                                <option value="en|ru" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/ru.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Russian</h6>
                                </option>
                                <option value="en|ar" class="flex items-center gap-3 group/items language" >
                                    <img src="/assts/images/ae.svg" alt="" class="object-cover h-4 rounded-full">
                                    <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">Arabic</h6>
                                </option>
                                </select><div id="google_translate_element2"></div>
                        </div>
    
                        <div class="relative flex items-center h-header">
                            <button type="button" class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark" id="light-dark-mode">
                                <i data-lucide="sun" class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                            </button>
                        </div>
    
                        
    
                        
    
                        <div class="relative items-center hidden h-header md:flex">
                            <button data-drawer-target="customizerButton" type="button" class="inline-flex justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar group-data-[topbar=dark]:text-topbar-item-dark rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200">
                                <i data-lucide="settings" class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                            </button>
                        </div>
    
                        <div class="relative flex items-center dropdown h-header">
                            <button type="button" class="inline-block p-0 transition-all duration-200 ease-linear bg-topbar rounded-full text-topbar-item dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                <div class="bg-pink-100 rounded-full">
                                    <img src="{{ asset('storage/profile/' . user()->photo) }}" alt="" class="w-[37.5px] h-[37.5px] rounded-full">
                                </div>
                            </button>
                            <div class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[14rem] dark:bg-zink-600" aria-labelledby="dropdownMenuButton">
                                <h6 class="mb-2 text-sm font-normal text-slate-500 dark:text-zink-300">Welcome to FXCrypterio</h6>
                                <a href="#!" class="flex gap-3 mb-3">
                                    <div class="relative inline-block shrink-0">
                                        <div class="rounded bg-slate-100 dark:bg-zink-500">
                                            <img src="{{ asset('storage/profile/' . user()->photo) }}" alt="" class="w-12 h-12 rounded">
                                        </div>
                                        <span class="-top-1 ltr:-right-1 rtl:-left-1 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full dark:border-zink-600"></span>
                                    </div>
                                    @if (site('kyc_v') == 1)
                            @if (user()->kyc_verified_at)
                                    <div>
                                        <h6 class="mb-1 text-15">Hi {{ user()->username ?? 'User' }}</h6>
                                        <p class="text-slate-500 dark:text-zink-300">FXCrypterio Member</p>
                                    </div>
                            @else
                            @if (!user()->username) title="Complete account information"
                                    @else 
                                        title="You have not completed your KYC" @endif
                                    class="flex space-x-1 items-center text-orange-500 ts-gray-2 px-3 py-1 rounded-full shadow cursor-pointer  hover:bg-purple-600 hover:scale-110 transition-all">
                                    <div>
                                        <h6 class="mb-1 text-15">Hi {{ user()->username ?? 'User' }}</h6>
                                        <p class="text-slate-500 dark:text-zink-300">FXCrypterio Member</p>
                                    </div>
                            @endif
                        @else
                            @if (user()->username)        
                                    <div>
                                        <h6 class="mb-1 text-15">Hi {{ user()->username ?? 'User' }}</h6>
                                        <p class="text-slate-500 dark:text-zink-300">FXCrypterio Member</p>
                                    </div>
                            @else        
                                    <div>
                                        <h6 class="mb-1 text-15">Hi {{ user()->username ?? 'User' }}</h6>
                                        <p class="text-slate-500 dark:text-zink-300">FXCrypterio Member</p>
                                    </div>
                            @endif
                        @endif
                                </a>
                                <ul>
                                    <li>
                                        <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ route('user.profile.index') }}"><i data-lucide="user-2" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ route('user.profile.edit') }}"><i data-lucide="mail" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Edit Profile</a>
                                    </li>
                                    <li>
                                        <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ route('user.kyc.index') }}"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> KYC</a>
                                    </li>
                                    
                                    <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                        <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500 logout" ><i data-lucide="log-out" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">

        
            <div class="w-full min-h-screen">
                <div class="w-full p-3 mb-2">
                    <h1 class="capitalize  font-extrabold "><span class="border-b-2 text-16">{{ $page_title }}</span></h1>
                </div>
                @if (!user()->username)
                <div class="w-full flex justify-center items-center space-x-2 p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer">
                   <marquee behavior="scroll" direction="up" scrollamount="1" ><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <span style="color: #EF4444; font-size: 18px;">Please update your profile and set your account username!</span></marquee>
                    
                    
                        <a href="{{ route('user.profile.edit') }}" class="bg-purple-500 px-2 py-1 rounded-lg hover:scale-110 transition-all" style="font-size: 18px;"> Update </a>
                    
                </div>
                @endif
                    
                @yield('contents')
                
                </div>

            
        </div>
                
                

        <footer class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm absolute right-0 bottom-0 px-4 h-14 group-data-[layout=horizontal]:ltr:left-0  group-data-[layout=horizontal]:rtl:right-0 left-0 border-t py-3 flex items-center dark:border-zink-600">
            <div class="group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl w-full">
                <div class="grid items-center grid-cols-1 text-center lg:grid-cols-2 text-slate-400 dark:text-zink-200 ltr:lg:text-left rtl:lg:text-right">
                    <div>
                        <script>document.write(new Date().getFullYear())</script> © FX Crypterio.
                    </div>
                    
                </div>
            </div>
        </footer>        
    </div>

</div>
<!-- end main content -->

<div class="fixed items-center hidden bottom-6 right-12 h-header group-data-[navbar=hidden]:flex">
    <button data-drawer-target="customizerButton" type="button" class="inline-flex items-center justify-center w-12 h-12 p-0 transition-all duration-200 ease-linear rounded-md shadow-lg text-sky-50 bg-sky-500">
        <i data-lucide="settings" class="inline-block w-5 h-5"></i>
    </button>
</div>

<div id="customizerButton" drawer-end class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-96 z-drawer show dark:bg-zink-600">
    <div class="flex justify-between p-4 border-b border-slate-200 dark:border-zink-500">
        <div class="grow">
            <h5 class="mb-1 text-16">FXCrypterio Theme Customizer</h5>
            <p class="font-normal text-slate-500 dark:text-zink-200">Choose your themes & layouts etc.</p>
        </div>
        <div class="shrink-0">
            <button data-drawer-close="customizerButton" class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800 dark:text-zink-200 dark:hover:text-zink-50"><i data-lucide="x" class="w-4 h-4"></i></button>
        </div>
    </div>
    <div class="h-full p-6 overflow-y-auto">
        <div>
            <h5 class="mb-3 underline capitalize text-15">Choose Layouts</h5>
            <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                <div class="relative">
                    <input id="layout-one" name="dataLayout" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="vertical" checked>
                    <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layout-one">
                        <span class="flex h-full gap-0">
                            <span class="shrink-0">
                                <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                    <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                </span>
                            </span>
                            <span class="grow">
                                <span class="flex flex-col h-full">
                                    <span class="block h-3 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                    <h5 class="mt-2 text-center text-15">Vertical</h5>
                </div>

                <div class="relative">
                    <input id="layout-two" name="dataLayout" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="horizontal">
                    <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layout-two">
                        <span class="flex flex-col h-full gap-1">
                            <span class="flex items-center gap-1 p-1 bg-slate-100 dark:bg-zink-500">
                                <span class="block p-1 ml-1 bg-white rounded dark:bg-zink-500"></span>
                                <span class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500 ms-auto"></span>
                                <span class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500"></span>
                            </span>
                            <span class="block p-1 bg-slate-100 dark:bg-zink-500"></span>
                            <span class="block p-1 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                        </span>
                    </label>
                    <h5 class="mt-2 text-center text-15">Horizontal</h5>
                </div>
            </div>

            <div id="semi-dark">
                <div class="flex items-center">
                    <div class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in">
                        <input type="checkbox" name="customDefaultSwitch" value="dark" id="customDefaultSwitch" class="absolute block w-5 h-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 bg-white/80 peer/published checked:bg-white checked:right-0 checked:border-custom-500 arrow-none dark:border-zink-500 dark:bg-zink-500 dark:checked:bg-zink-400 checked:bg-none">
                        <label for="customDefaultSwitch" class="block h-5 overflow-hidden transition duration-300 ease-linear border rounded-full cursor-pointer border-slate-200 bg-slate-200 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500 dark:border-zink-500 dark:bg-zink-600"></label>
                    </div>
                    <label for="customDefaultSwitch" class="inline-block text-base font-medium">Semi Dark (Sidebar & Header)</label>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <!-- data-skin="" -->
            <h5 class="mb-3 underline capitalize text-15">Skin Layouts</h5>
            <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                <div class="relative">
                    <input id="layoutSkitOne" name="dataLayoutSkin" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="default">
                    <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500 bg-slate-50 dark:bg-zink-600" for="layoutSkitOne">
                        <span class="flex h-full gap-0">
                            <span class="shrink-0">
                                <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                    <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                </span>
                            </span>
                            <span class="grow">
                                <span class="flex flex-col h-full">
                                    <span class="block h-3 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                    <h5 class="mt-2 text-center text-15">Default</h5>
                </div>
        
                <div class="relative">
                    <input id="layoutSkitTwo" name="dataLayoutSkin" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="bordered" checked>
                    <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layoutSkitTwo">
                        <span class="flex h-full gap-0">
                            <span class="shrink-0">
                                <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                    <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                    <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                </span>
                            </span>
                            <span class="grow">
                                <span class="flex flex-col h-full">
                                    <span class="block h-3 border-b border-slate-200 dark:border-zink-500"></span>
                                    <span class="block h-3 mt-auto border-t border-slate-200 dark:border-zink-500"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                    <h5 class="mt-2 text-center text-15">Bordered</h5>
                </div>
            </div>
        </div>
        
        <div class="mt-6">
            <!-- data-mode="" -->
            <h5 class="mb-3 underline capitalize text-15">Light & Dark</h5>
            <div class="flex gap-3">
                <button type="button" id="dataModeOne" name="dataMode" value="light" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Light Mode</button>
                <button type="button" id="dataModeTwo" name="dataMode" value="dark" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Dark Mode</button>
            </div>
        </div>

        <div class="mt-6">
            <!-- dir="ltr" -->
            <h5 class="mb-3 underline capitalize text-15">LTR & RTL</h5>
            <div class="flex flex-wrap gap-3">
                <button type="button"  id="diractionOne" name="dir" value="ltr" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">LTR Mode</button>
                <button type="button"  id="diractionTwo" name="dir" value="rtl" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">RTL Mode</button>
            </div>
        </div>

        <div class="mt-6">
            <!-- data-content -->
            <h5 class="mb-3 underline capitalize text-15">Content Width</h5>
            <div class="flex gap-3">
                <button type="button" id="datawidthOne" name="datawidth" value="fluid" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Fluid</button>
                <button type="button" id="datawidthTwo" name="datawidth" value="boxed" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Boxed</button>
            </div>
        </div>

        <div class="mt-6" id="sidebar-size">
            <!-- data-sidebar-size="" -->
            <h5 class="mb-3 underline capitalize text-15">Sidebar Size</h5>
            <div class="flex flex-wrap gap-3">
                <button type="button" id="sidebarSizeOne" name="sidebarSize" value="lg" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Default</button>
                <button type="button" id="sidebarSizeTwo" name="sidebarSize" value="md" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Compact</button>
                <button type="button" id="sidebarSizeThree" name="sidebarSize" value="sm" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Small (Icon)</button>
            </div>
        </div>

        <div class="mt-6" id="navigation-type">
            <!-- data-navbar="" -->
            <h5 class="mb-3 underline capitalize text-15">Navigation Type</h5>
            <div class="flex flex-wrap gap-3">
                <button type="button" id="navbarTwo" name="navbar" value="sticky" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Sticky</button>
                <button type="button" id="navbarOne" name="navbar" value="scroll" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Scroll</button>
                <button type="button" id="navbarThree" name="navbar" value="bordered" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Bordered</button>
                <button type="button" id="navbarFour" name="navbar" value="hidden" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Hidden</button>
            </div>
        </div>

        <div class="mt-6" id="sidebar-color">
            <!-- data-sidebar="" light, dark, brand, modern-->
            <h5 class="mb-3 underline capitalize text-15">Sizebar Colors</h5>
            <div class="flex flex-wrap gap-3">
                <button type="button" id="sidebarColorOne" name="sidebarColor" value="light" class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"></i></button>
                <button type="button" id="sidebarColorTwo" name="sidebarColor" value="dark" class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                <button type="button" id="sidebarColorThree" name="sidebarColor" value="brand" class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                <button type="button" id="sidebarColorFour" name="sidebarColor" value="modern" class="flex items-center justify-center w-10 h-10 border rounded-md border-purple-950 bg-gradient-to-t from-red-400 to-purple-500 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
            </div>
        </div>
        
        <div class="mt-6">
            <!-- data-topbar="" light, dark, brand, modern-->
            <h5 class="mb-3 underline capitalize text-15">Topbar Colors</h5>
            <div class="flex flex-wrap gap-3">
                <button type="button" id="topbarColorOne" name="topbarColor" value="light" class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"></i></button>
                <button type="button" id="topbarColorTwo" name="topbarColor" value="dark" class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                <button type="button" id="topbarColorThree" name="topbarColor" value="brand" class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
            </div>
        </div>
        
    </div>
    
</div>

<a href="https://wa.me/" target="_blank" class="fixed bottom-0 right-0 z-50 mb-5">
        <img src="/whatsapp.png" alt="" class="w-10 h-10 animated-image shadow mr-2">
    </a>


<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
								
								
								<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>



    {{-- all script placements --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Include SweetAlert2 JavaScript file -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    {{-- owl carrousel --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    {{-- datatable --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/kt-2.7.0/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/datatables.min.js">
    </script>


    {{-- qrcode --}}
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    {{-- main scripts --}}
    <script src="{{ asset('assets/scripts/cs.js') }}"></script>
    <script src="{{ asset('assets/scripts/main.js') }}"></script>


    @yield('scripts')

    <script>
        $(document).ready(function() {
            $('.datatable-skeleton-table').DataTable({
                scrollX: true,
                "sScrollXInner": "100%",
            });


        });
    </script>

    {{-- toast notification --}}
    @php
        if (session()->has('fail')) {
            $type = 'error';
            $message = session()->get('fail');
        } elseif (session()->has('success')) {
            $type = 'success';
            $message = session()->get('success');
        } else {
            $type = null;
            $message = null;
        }
    @endphp
    <script>
        var type = "{{ $type }}";
        var message = "{{ $message }}";
        if (type && message) {
            toastNotify(type, message);
        }
    </script>

    {{-- logout --}}
    <script>
        $(document).on('click', '.logout', function(e){
            html = `
                <div class="mt-5 h-72 ts-gray-3 p-2 rounded-lg flex justify-center items-center">
                    <div>
                        <h2 class="text-white text-center">Do you really want to Logout?</h2>
                        <form action="{{ route('user.logout') }}" class="mt-5 gen-form" data-action="redirect" data-url="{{ url('/') }}">
                            @csrf
                            <button type="submit" class="mt-5 bg-red-500 text-white px-2 py-1 rounded-full text-xs hover:scale-110 transition-all uppercase" type="submit">Yes,  Logout</button>
                        </form>
                        
                    </div>
                </div>
                `;
            Swal.fire({
                html: html,
                toast: false,
                background: 'rgb(7, 3, 12, 0)',
                showConfirmButton: false,
                showCloseButton: true,
                allowEscapeKey: false, // Prevent closing by escape key
                allowOutsideClick: false, // Prevent closing by clicking backdrop
                willClose: () => {
                    //delete the previously generated qrcode
                    // $('#single_wallet_qrcode').html('');
                }
            });
        });
    </script>

    {{-- livechat --}}
    {!! json_decode(site('livechat')) !!}
    
<script src='/assts/libs/choices.js/public//assts/scripts/choices.min.js'></script>
<script src="/assts/libs/%40popperjs/core/umd/popper.min.js"></script>
<script src="/assts/libs/tippy.js/tippy-bundle.umd.min.js"></script>
<script src="/assts/libs/simplebar/simplebar.min.js"></script>
<script src="/assts/libs/prismjs/prism.js"></script>
<script src="/assts/libs/lucide/umd/lucide.js"></script>
<script src="/assts/js/tailwick.bundle.js"></script>
<!--apexchart js-->
<script src="/assts/libs/apexcharts/apexcharts.min.js"></script>
<script src="../../../apexcharts.com/samples//assts/stock-prices.js"></script>

<!--dashboard analytics init js-->
<script src="/assts/js/pages/dashboards-analytics.init.js"></script>

<!-- App js -->
<script src="/assts/js/app.js"></script>

</body>


<!-- Mirrored from themesdesign.in/tailwick/html-dark/dashboards-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 14:18:10 GMT -->
</html>
            