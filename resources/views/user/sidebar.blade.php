<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
        <div class="logo justify-content-center align-items-center d-flex">
            <a href="javascript:void(0)" class="simple-text logo-normal">
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
                <a href="{{route('kelasSiswa.index')}}">
                    <i class="tim-icons icon-atom"></i>
                    <p>Data Kelas</p>
                </a>
            </li>
            <li>
                <a href="{{route('jadwalSiswa.index')}}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Data Jadwal</p>
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>

