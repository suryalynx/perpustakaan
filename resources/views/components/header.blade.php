<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin.dashboard')}}">SPW Dev</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @php

            $id = Auth::user()->id;
            $profileData = App\Models\User::find($id);

            @endphp

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="Profile Picture" class="rounded-circle me-2" style="width: 30px; height: 30px; object-fit: cover;"> <!-- Profile picture -->
                        <span class="d-none d-sm-inline">{{($profileData->name)}}</span> <!-- User's name -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('admin.logout')}}">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
