<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand navbar-light bg-danger">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="index.php" aria-current="page">Home <span
                        class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="buscar.php">Buscar</a>
            </div>
        </nav>

    </header>
    <main>
        <section class="mt-3">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-12 p-xl-5">
                        <h1 class="text-center">Buscar Usuario</h1>
                        <div class="card mt-3 rounded-5">
                            <div class="card-body bg-warning rounded-5">
                                <h4 class="card-title text-center text-dark"><i
                                        class="bi bi-file-earmark-ruled fs-4 img-fluid"></i> Registrar Usuarios</h4>
                                <form name="registros" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" aria-describedby="helpId"
                                            placeholder="" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" aria-describedby="helpId"
                                            placeholder="" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Genero</label>
                                        <select class="form-select form-select-lg" name="generoUsuario" id="generoUsuario">
                                            <option selected>Seleccione</option>
                                            <option value="femenino">Femenino</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="otros">Otros</option>
                                        </select>
                                    </div>


                                    <button type="button" class="btn btn-danger float-end" onclick="validar()">Registrar</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <script src="js/buscador.js"></script>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>