@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm"> Tambah </a>
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama guru</th>
                        <th>Jenis Kelamin</th>
                        <th>no_hp</th>
                        <th>mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $i => $v)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $v->nip }}</td>
                            <td>{{ $v->nama_guru }}</td>
                            <td>{{ $v->jenis_kelamin }}</td>
                            <td>{{ $v->no_hp }}</td>
                            <td>{{ $v->mapel->nama_mapel }}</td>
                            <td>
                                <form action="{{ route('guru.destroy', $v->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('guru.edit', $v->id) }}" class="btn btn-warning btn-sm">edit</a>
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
