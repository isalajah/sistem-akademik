{{-- <td>{{ $i + 1 }}</td>
    <td>{{ $v->name }}</td>
    <td>{{ $v->email }}</td>
    <td>{{ $v->password }}</td>
    <td>{{ $v->role }}</td>
    <td>
        <form action="{{ route('kelas.destroy', $v->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <a href="{{ route('kelas.edit', $v->id) }}" class="btn btn-warning btn-sm">edit</a>
            <button class='btn btn-danger btn-sm'>hapus</button>
        </form>
    </td>
</tr> --}}

@extends('template.halaman')
@section('users')
    @include('user.sidebar')
    <div class="main-panel">
        @include('user.navbar')
        <div class="content">
            <section style="">
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/img/Logo_SMKI_Utama1.jpg') }}"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{ Auth::user()->name }}</h5>
                                    <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                                    <p class="text-muted mb-4">{{ Auth::user()->role }}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                       
                                        @foreach ($user as $v)
                                        @if($hide > 0)
                                        @else
                                        <a href="{{route('users.edit', $v->id)}}" class="btn btn-primary btn-sm">Update Profile</a>
                                        @endif
                                        @endforeach
                                        <a href="{{route('users.edit', $v->id)}}" class="btn btn-primary btn-sm">Update Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Pengguna</p>
                                        </div>
                                        <div class="col-sm-9">  
                                            <p class="text mb-0">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text mb-0">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text mb-0"> {{ Auth::user()->role }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text mb-0"> {{ Auth::user()->alamat }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tempat Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text mb-0"> {{ Auth::user()->tempat_lahir }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Tanggal Lahir</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text mb-0"> {{ Auth::user()->tgl_lahir }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            @if (Request::is('dashboard'))
            @else
                @yield('content')
            @endif
        </div>
    </div>
@endsection
