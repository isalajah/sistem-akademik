@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $i =>  $v)
                        <tr>
                            <td>{{ $i+1}}</td>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->email }}</td>
                            <td>{{ $v->alamat }}</td>
                            <td>{{ $v->tgl_lahir }}</td>
                            <td>{{ $v->tempat_lahir }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Request::is('dashboard'))
                
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
