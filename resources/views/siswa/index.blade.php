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
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">John Smith</h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
              <div class="d-flex justify-content-center mb-2">
               
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
                  <p class="text mb-0">Faisal Alkhori</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text mb-0">example@example.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Password</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(097) 234-5678</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Ulangi Password</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div>
             
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                
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