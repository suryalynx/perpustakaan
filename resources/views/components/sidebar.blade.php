@php

$id = Auth::user()->id;
$profileData = App\Models\User::find($id);

@endphp
<nav id="sidebar" class="bg-light" style="max-width: 250px;>
    <div class="p-4 pt-5">
        <ul class="nav flex-column">
            <a class="rounded-circle me-2" style="width: 30px; height: 30px; object-fit: cover;">{{($profileData->photo)}}</a>
            <a class="navbar-brand">{{($profileData->name)}}</a>
            <a class="d-none d-sm-inline">{{($profileData->role)}}</a>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Katalog Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pinjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Anggota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Laporan</a>
            </li>
        </ul>
    </div>
</nav>
