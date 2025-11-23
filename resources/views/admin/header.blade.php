<!-- resources/views/admin/partials/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-shield-alt mr-2"></i> Admin Panel
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ml-auto align-items-center">

                <li class="nav-item mr-3">
                    <a class="nav-link text-white" href="/" target="_blank">
                        <i class="fas fa-globe mr-1"></i> View Website
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle mr-1"></i> Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>