@extends('template.halaman')
@section('users')
    @include('user.sidebar')
    <div class="main-panel">
        @include('user.navbar')
        <div class="content">
            <table class="table tablesorter " id="" border="2">
                <thead class=" text-primary">
                    <tr>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>jam</th>
                        <th>Mapel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwal as $i => $v)
                        <tr>
                            <td>{{ $v->kelas_id }}</td>
                            <td>{{ $v->hari }}</td>
                            <td>{{$v->waktu}}</td>
                            <td>{{ $v->mapel->nama_mapel }}</td>
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

