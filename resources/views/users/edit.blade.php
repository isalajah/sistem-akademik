@extends('template.halaman')
@section('users')
    @include('user.sidebar')
    <div class="main-panel">
        @include('user.navbar')
        <div class="content">
            <form action="{{route('users.update', $user->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nama Pengguna</label>
                    <input type="string" name="name" placeholder="Masukan Nama Pengguna" value="{{ Auth::user()->name }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Masukan Email" value="{{ Auth::user()->email }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ Auth::user()->tempat_lahir }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" placeholder="Masukan tanggal lahir" value="{{ Auth::user()->tgl_lahir }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukan Alamat" value="{{ Auth::user()->alamat }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Ubah</button>
                    <a href="{{route('users.index')}}" class="btn btn-warning btn-sm">Batal</a>
                </div>
                </form>
                @if (Request::is('dashboard'))
                
                @else
                   @yield('content') 
                @endif
            </div>
        </div>
    @endsection


