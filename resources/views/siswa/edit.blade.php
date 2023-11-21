@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('siswa.update', $siswa->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="number" name="nisn" placeholder="Masukan NISN" value="{{$siswa->nisn}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" name="nama_siswa" placeholder="Masukan Nama Siswa" value="{{$siswa->nama_siswa}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat_lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{$siswa->tempat_lahir}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" placeholder="Masukan tanggal lahir" value="{{$siswa->tanggal_lahir}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukan Alamat" value="{{$siswa->alamat}}" class="form-control" required>
                </div>
                <table class="table">
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
                    <button class="btn btn-primary btn-sm">Ubah</button>
                    <a href="{{route('siswa.index')}}" class="btn btn-warning btn-sm">Bata</a>
                </div>
                </form>
            @if (Request::is('dashboard'))
                
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection


