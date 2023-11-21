@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <div class="card card-frame">
                <div class="card-body text-light text-center">
                    <h4>
                  Selamat Datang <br>
                  Admin!
                    </h4>
                </div>
              </div>
            @if (Request::is('dashboard'))
                
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
