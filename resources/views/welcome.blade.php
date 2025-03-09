<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Biblioteca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tu archivo CSS personalizado -->
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#busqueda">Búsqueda Avanzada</a></li>
                    <li class="nav-item"><a class="nav-link" href="#libros">Gestión de Libros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#usuarios">Gestión de Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#prestamos">Préstamos y Devoluciones</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#login">Iniciar Sesión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#register">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container mt-4">
        <!-- Sección de inicio -->
        <section id="inicio" class="text-center mb-4 fade-in">
            <h2>Bienvenido al Sistema de Gestión de Biblioteca</h2>
            <p class="lead">Administra de manera eficiente los libros, usuarios y préstamos de la biblioteca.</p>
        </section>

        <!-- Módulo: Búsqueda Avanzada -->
        <section id="busqueda" class="mb-4 fade-in">
            <h2>Búsqueda Avanzada</h2>
            <p>Busca libros por autor, título o género.</p>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor" placeholder="Nombre del autor">
                </div>
                <div class="col-md-4">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Título del libro">
                </div>
                <div class="col-md-4">
                    <label for="genero" class="form-label">Género</label>
                    <select id="genero" class="form-select">
                        <option selected>Selecciona un género...</option>
                        <option value="1">Aventuras</option>
                        <option value="2">Ciencia Ficción</option>
                        <option value="3">Terror y Misterio</option>
                        <option value="4">Romántica</option>
                        <option value="5">Poesía</option>
                        <option value="6">Mitología</option>
                        <option value="7">Cuento</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </section>

        <!-- Módulo: Gestión de Libros -->
        <section id="libros" class="mb-4 fade-in">
            <h2>Gestión de Libros</h2>
            <p>Registro, consulta y actualización de libros.</p>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Registrar Libro</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success w-100">Consultar Libros</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-warning w-100">Actualizar Libro</button>
                </div>
            </div>
        </section>

        <!-- Módulo: Gestión de Usuarios -->
        <section id="usuarios" class="mb-4 fade-in">
            <h2>Gestión de Usuarios</h2>
            <p>Administración de usuarios y su historial de préstamos.</p>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">Registrar Usuario</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success w-100">Consultar Usuarios</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-warning w-100">Ver Historial</button>
                </div>
            </div>
        </section>

        <!-- Módulo: Préstamos y Devoluciones -->
        <section id="prestamos" class="mb-4 fade-in">
            <h2>Préstamos y Devoluciones</h2>
            <p>Registro de préstamos y devoluciones de libros.</p>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-primary w-100">Registrar Préstamo</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success w-100">Registrar Devolución</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer class="text-center py-3">
        <p>&copy; 2025 Sistema de Gestión de Biblioteca</p>
    </footer>

    <!-- Bootstrap JS (opcional, solo si necesitas funcionalidades de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
