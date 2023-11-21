@extends('template.halaman')
@section('users')
    @include('user.sidebar')
    <div class="main-panel">
        @include('user.navbar')
        <div class="content">
            <div class="card card-frame">
                <div class="card-body text-light text-center">
                    <h4>
                  Selamat Datang <br>
                  {{ Auth::user()->name }}!
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
