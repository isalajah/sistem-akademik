
@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary btn-sm"><i class="tim-icons icon-simple-add"></i></a>
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jurusan as $i => $v)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $v->nama_jurusan }}</td> 
                            <td>
                                <form action="{{ route('jurusan.destroy', $v->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                    <a href="{{ route('jurusan.edit', $v->id) }}" class="btn btn-warning btn-sm"><i class="tim-icons icon-pencil"></i></a>
                                    <button class='btn btn-danger btn-sm'><i class="tim-icons icon-trash-simple"></i></button>
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
