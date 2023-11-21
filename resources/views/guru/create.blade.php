@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('guru.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" name="nip" placeholder="Masukan nip" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_guru">Nama guru</label>
                    <input type="text" name="nama_guru" placeholder="Masukan Nama guru" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                    <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                </div>
                <div class="form-group">
                    <label for="no_hp">No Handphone</label>
                    <input type="number" name="no_hp" placeholder="Masukan Nomer Telepon" class="form-control" required>
                </div>
                <table class="table">
                    <div class="form-group">
                    <label class="mapel_id">mapel</label>
                    <select class="form-control" name="mapel_id">
                    <option value="">pilih mapel</option>
                        @foreach ($mapel As $k)
                    <option value="{{$k->id}}">{{$k->nama_mapel}}</option>
                        @endforeach
                    </select>
                    <p class="text-danger">{{$errors->first('mapel_id')}}</p>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Tambah</button>
                    <a href="{{route('siswa.index')}}" class="btn btn-warning btn-sm">Kembali</a>
                </div>
                </form>
            @if (Request::is('dashboard'))
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
