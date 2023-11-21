
@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <a href="{{ route('mapel.create') }}" class="btn btn-primary btn-sm"> Tambah </a>
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mapel as $i => $v)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $v->nama_mapel }}</td>
                            <td>
                                <form action="{{ route('mapel.destroy', $v->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('mapel.edit', $v->id) }}" class="btn btn-warning btn-sm">edit</a>
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

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    
</body>
</html>
