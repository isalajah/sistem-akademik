@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('mapel.update', $mapel->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="nama_mapel">nama </label>
                    <input type="text" name="nama_mapel" value="{{$mapel->nama_mapel}}" class="form-control" required>
                </div>
                <button class="btn btn-primary btn-sm">ubah</button>
                </form>
            @if (Request::is('dashboard'))
                
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection

