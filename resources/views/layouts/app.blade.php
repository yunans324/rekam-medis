<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistem Rekam Medis') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6f42c1;
            --primary-dark: #5a32a3;
            --primary-light: #845ecc;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: var(--primary-color);
        }
        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .sidebar .nav-link {
            font-weight: 500;
            color: white;
            padding: 1rem 1.5rem;
        }
        .sidebar .nav-link:hover {
            background-color: var(--primary-dark);
        }
        .sidebar .nav-link.active {
            background-color: var(--primary-light);
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            background-color: white !important;
            padding: 0.5rem 1rem;
        }
        .main-content {
            margin-left: 250px;
            padding: 48px 20px 20px;
        }
        .navbar-brand {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
            padding: 0;
        }
        .navbar-brand strong {
            font-size: 1.1rem;
            color: var(--primary-color);
        }
        .navbar-brand small {
            font-size: 0.8rem;
            color: #666;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        .btn-success {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-success:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        .card-header {
            background-color: var(--primary-color);
            color: white;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 0;
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <strong>POLIKLINIK KELOMPOK 11</strong>
                <small>Sistem Rekam Medis</small>
            </a>
            <div class="ms-auto">
                <div class="dropdown">
                    <button class="btn btn-link text-dark text-decoration-none dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rekam-medis.*') ? 'active' : '' }}" href="{{ route('rekam-medis.index') }}">
                        <i class="bi bi-journal-medical"></i>
                        Rekam Medis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pasien.*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">
                        <i class="bi bi-people"></i>
                        Data Pasien
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('praktik.*') ? 'active' : '' }}" href="{{ route('praktik.index') }}">
                        <i class="bi bi-gear"></i>
                        Pengaturan Praktik
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
