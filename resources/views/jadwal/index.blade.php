@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <a href="{{ route('jadwal.create') }}" class="btn btn-primary btn-sm"> Tambah </a>
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>kelas</th>
                        <th>waktu</th>
                        <th>mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwal as $i => $v)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $v->kelas_id }}</td>
                            <td>{{ $v->hari }}</td>
                            <td>{{$v->waktu}}</td>
                            <td>{{ $v->mapel->nama_mapel }}</td>
                            <td>
                                <form action="{{ route('jadwal.destroy', $v->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('jadwal.edit', $v->id) }}" class="btn btn-warning btn-sm">edit</a>
                                    <button class='btn btn-danger btn-sm'>hapus</button>
                                </form>
                            </td>
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
