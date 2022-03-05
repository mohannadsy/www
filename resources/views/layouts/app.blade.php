<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles/nav.css')}}">

</head>
<body>
    <div id="app">
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

        <header id="nav">
            <div class="wrapper" >
                <!-- <i class="toggle-btn fas fa-bars"></i> -->
                <!-- Navbar -->
                <nav class="nav-menus">
                    <li class="main-menu" ><a class="main-link" href="#"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class='fas fa-folder-open fa-9x' style=' padding-left:5px;'></i>ملف</a>
                        <ul>
                            <li><a class="sub-link" href="#">  ملف</a></li>
                            <li><a class="sub-link" href="#"> جديد</a></li>
                            <li><a class="sub-link" href="#"> إعادة تسمية</a></li>
                            <li><a class="sub-link" href="#"> النسخ الاحتياطي</a></li>
                            <li><a class="sub-link" href="#"> استيراد نسخة احتياطية</a></li>

                        </ul>
                    </li>
                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class="fa-solid fa-receipt"></i> فاتورة</a>
                        <ul>
                            <li><a class="sub-link" href="#">  مشتريات</a></li>
                            <li><a class="sub-link" href="#">  مبيعات</a></li>
                            <li><a class="sub-link" href="#">  مرتجع مشتريات</a></li>
                            <li><a class="sub-link" href="#">  مرتجع مبيعات</a></li>
                            <li><a class="sub-link" href="#"> بضاعة اول المدة </a></li>
                            <li><a class="sub-link" href="#"> تالف </a></li>
                            <li><a class="sub-link" href="#"> تصنيع </a></li>
                            <li><a class="sub-link" href="#"> كمسيون </a></li>

                        </ul>
                    </li>
                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class='fas fa-copy fa-9x'></i> سندات</a>
                        <ul>
                            <li><a href="#"> سند قيد</a></li>
                            <li><a href="#"> سند قبض</a></li>
                            <li><a href="#"> سند دفع</a></li>

                        </ul>
                    </li>
                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class="fa-solid fa-user"></i> زبائن</a>
                        <ul>
                            <li><a href="#">  كشف حساب الزبون</a></li>
                            <li><a href="#">  أرصدة الزبائن</a></li>

                        </ul>
                    </li>
                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class='fas fa-dolly-flatbed fa-9x' ></i> مواد</a>
                        <ul>
                            <li><a href="#"> بطاقة صنف</a></li>
                            <li><a href="#"> بطاقة مادة</a></li>
                            <li><a href="#"> بطاقة مستودع</a></li>
                            <li><a href="#"> دليل المواد</a></li>
                            <li><a href="#"> دليل المستودعات</a></li>
                            <li class="item-report-menu"><a href="#"><i class="fa-solid fa-caret-left"></i> تقارير  المواد</a>
                                <ul>
                                    <li><a href="#">حركة مادة</a></li>
                                    <li><a href="#">جرد المواد</a></li>
                                    <li><a href="#">أرباح المواد </a></li>
                                    <li><a href="#">أرباح الفواتير </a></li>
                                    <li><a href="#">حركة إجمالي الفواتير</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menus main-menu"><a class="main-link" href="#"><i class="fas fa-users"></i> الحسابات</a>
                        <ul>
                            <li><a href="#"> بطاقة حساب</a></li>
                            <li><a href="#"> دليل الحسابات</a></li>
                            <li><a href="#"> دفتر أستاذ</a></li>
                            <li><a href="#"> أرصدة  الحسابات</a></li>
                            <li><a href="#"> الميزانية</a></li>
                            <li><a href="#"> المتاجرة</a></li>
                            <li><a href="#"> الأرباح والخسائر</a></li>
                            <li><a href="#"> إضافة العملة</a></li>
                            <li><a href="#"> تعديل أسعار الصرف</a></li>
                            <li><a href="#"> ميزان المراجعة</a></li>
                            <li><a href="#"> مراكز الكلفة</a>
                                <ul style=" position: absolute;right: 9em;top: 1.6em;">
                                    <li><a href="#">بطاقة مركز كلفة</a></li>
                                    <li><a href="#">دليل مراكز كلفة</a></li>
                                    <li><a href="#"> تقرير حركة مركز كلفة </a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>



                    <li class="main-menu"><a class="main-link" href="#"><i  class='fas fa-cogs fa-9x'></i> الإعدادات</a></li>
                    <li class="main-menu"><a class="main-link" href="#"><i class="fas fa-align-left"></i> معلومات</a></li>
                    <li  class="sub-menus main-menu"><a class="main-link" href="#"><i class="fa-solid fa-wrench" ></i> أدوات</a>
                        <ul>
                            <li><a href="#">آلة حاسبة</a></li>
                            <li><a href="#"> اللغة</a></li>
                            <li><a href="#"> طباعة اللصافات</a></li>
                        </ul>
                    </li>
                    <li class="main-menu"><a class="main-link" href="#"><i class='fas fa-info-circle fa-9x' ></i> حول</a></li>

                </nav>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
