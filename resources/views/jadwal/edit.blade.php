@extends('template.halaman')
@section('admin')
    @include('admin.sidebar')
    <div class="main-panel">
        @include('admin.navbar')
        <div class="content">
            <form action="{{route('jadwal.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="hari">hari</label>
                <input type="text" name="hari" value="{{$jadwal->hari}}" placeholder="Masukan Nama Kelas" class="form-control">
            </div>
            <div class="form-group">
                <label for="waktu">waktu</label>
                <input type="text" name="waktu" value="{{$jadwal->hari}}" placeholder="Masukan Nama waktu" class="form-control" required>
            </div>
            <div class="form-group">
				<label class="kelas_id">Kelas</label>
				<select class="form-control" name="kelas_id">
				<option value="">Pilih kelas</option>
					@foreach ($kelas As $k)
				<option value="{{$k->nama_kelas}}">{{$k->nama_kelas}}</option>
					@endforeach
				</select>
				<p class="text-danger">{{$errors->first('kelas_id')}}</p>
			</div>
            <div class="form-group">
				<label class="mapel_id">Jadwal</label>
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
                <a href="{{route('jadwal.index')}}" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            </form>
            @if (Request::is('dashboard'))
            @else
               @yield('content') 
            @endif
        </div>
    </div>
@endsection
