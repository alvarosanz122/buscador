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
                <a class="nav-item nav-link" href="#">Buscar</a>
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
                            <div class="card-body bg-warning rounded-5 p-5">
                                <h4 class="card-title text-center text-dark"><i
                                        class="bi bi-search fs-4 img-fluid"></i> Buscar</h4>
                                <form name="buscador" method="post">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" aria-describedby="helpId"
                                            placeholder="" />
                                    </div>
                                     <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-danger w-xl-25"  onclick="buscar()">buscar</button>
                                     </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="col-12 p-5 d-none datosBuscados">
                            <h4 class="text-center">Los datos del usuario encontrado son</h4>
                            <div
                                class="table-responsive mt-5"
                            >
                                <table
                                    class="table"
                                >
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Genero</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td id="nombreUsuario"></td>
                                            <td id="emailUser"></td>
                                            <td id="generoUsuario"></td>
                                        </tr>
                                    </tbody>
                                </table>
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