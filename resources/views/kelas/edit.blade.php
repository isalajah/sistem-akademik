@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('kelas.update', $kelas->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" name="nama_kelas" placeholder="Masukan Nama Kelas" class="form-control" required>
            </div>
            <div class="form-group">
				<label class="guru_id">Wali Kelas</label>
				<select class="form-control" name="guru_id">
				<option value="">Pilih Guru</option>
					@foreach ($guru As $k)
				<option value="{{$k->id}}">{{$k->nama_guru}}</option>
					@endforeach
				</select>
				<p class="text-danger">{{$errors->first('guru_id')}}</p>
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
                <label for="jumlah_siswa">jumlah siswa</label>
                <input type="text" name="jumlah_siswa" placeholder="Masukan Jumlah Siswa" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Tambah</button>
                <a href="{{route('kelas.index')}}" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            </form>
            @if (Request::is('dashboard'))
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
