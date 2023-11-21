@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('jurusan.store')}}"method="post">
                {{csrf_field()}}
                        
                <div class="form-group">
                            <label for="nama_jurusan">nama </label>
                            <input type="text" name="nama_jurusan" class="form-control" required>
                    
                        </div>
                       <button class="btn btn-primary btn-sm"><i class="tim-icons icon-simple-add"></i></button>
                       <a href="{{route('jurusan.index')}}" class="btn btn-warning btn-sm"><i class="tim-icons icon-simple-remove"></i></a>
            @if (Request::is('dashboard'))
                
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
