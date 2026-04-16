<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de empleados</title>

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
        <li class="nav-item">
            <a class="nav-link" href="/empleados">
                <i class="fas fa-users"></i>
                <span>Empleados</span>
            </a>
        </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                <span>Sistema</span>
            </nav>

            <!-- CONTENIDO -->
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
    </div>

</div>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/js/sb-admin-2.min.js"></script>

</body>
</html>
