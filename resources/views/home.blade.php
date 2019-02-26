@extends('layouts.app')

@section('style')
    @yield('styleContainer')
    <style>
        .sidebar {
            position: fixed;
            top: 56PX;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 0;
        }

    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="sidebar-container bg-dark col-2  d-none d-md-block sidebar">
                <nav class="mt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('banner.index') }}" class="nav-link"><span class="h5 text-white ml-2">Banners</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-5 mt-3 px-4">
                @yield('contentContainer')
            </main>
        </div>
    </div>
@endsection

@section('script')
    @yield('scriptContainer')
@endsection
