<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
  @if(Auth::user()->role == 'admin')
    <div class="sidebar-wrapper">
        <div class="logo justify-content-center align-items-center d-flex">
            <a href="" class="simple-text logo-normal">
                Sistem Informasi
            </a>
        </div>
        <ul class="nav">
            <li class="">
                <a href="/dashboard">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('kelas.index')}}">
                    <i class="tim-icons icon-bank"></i>
                    <p>Kelas</p>
                </a>
            </li>
            <li>
                <a href="{{route('guru.index')}}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Guru</p>
                </a>
            </li>
            <li>
                <a href="{{route('mapel.index')}}">
                    <i class="tim-icons icon-calendar-60"></i>
                    <p>Mapel</p>
                </a>
            </li>
            <li>
                <a href="{{route('jurusan.index')}}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Jurusan</p>
                </a>
            </li>
            <li>
                <a href="{{route('jadwal.index')}}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Jadwal</p>
                </a>
            </li>
            <li>
                <a href="{{route('dataSiswa.index')}}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Data Siswa</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endif