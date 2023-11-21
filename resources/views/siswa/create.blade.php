@extends('template.halaman')
@section('users')
    @include('user.sidebar')
    <div class="main-panel">
        @include('user.navbar')
        <div class="content">
            <form action="{{route('siswa.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" name="nisn" placeholder="Masukan NISN" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" name="nama_siswa" placeholder="Masukan Nama Siswa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat_lahir</label>
                <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" placeholder="Masukan tanggal lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control" required>
            </div>
                <div class="form-group">
				<label class="jurusan_id">jurusan</label>
				<select class="form-control" name="jurusan_id">
				<option value="">pilih jurusan</option>
					@foreach ($jurusan As $k)
				<option value="{{$k->id}}">{{$k->nama_jurusan}}</option>
					@endforeach
				</select>
				<p class="text-danger">{{$errors->first('jurusan_id')}}</p>
			</div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Tambah</button>
                <a href="{{route('users.index')}}" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            </form>
            @if (Request::is('dashboard'))
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
