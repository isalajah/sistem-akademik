@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm"> Tambah </a>
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Wali Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $i => $v)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $v->nama_kelas }}</td>
                            <td>{{ $v->jurusan->nama_jurusan }}</td>
                            <td>{{ $v->guru->nama_guru }}</td>
                            <td>{{ $v->jumlah_siswa }}</td>
                            <td>
                                <form action="{{ route('kelas.destroy', $v->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('kelas.edit', $v->id) }}" class="btn btn-warning btn-sm">edit</a>
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
