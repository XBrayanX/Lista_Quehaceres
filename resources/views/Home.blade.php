<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{-- Fon Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-xxl">
        <header>
            <nav class="navbar navbar-expand-lg p-1">
                <a class="navbar-brand" href="">Brayan Aguilar</a>
            </nav>
        </header>

        <section class="content mt-3">
            <h2 class="h2 border-4 border-bottom mb-2">Lista de Quehaceres</h2>
            <div class="input-group mb-2 w-50">
                <input type="text" class="form-control" placeholder="Nueva Tarea" aria-label="tarea" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Seleccionar</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha Limite</th>
                        <th scope="col">Completado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input select" type="checkbox">
                            </div>
                        </td>
                        <td>Descripción Tarea</td>
                        <td>05/03/2023</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="options">
                <button type="button" class="btn btn-primary" id="btn_select_all">Marcar Todos</button>
                <button type="button" class="btn btn-danger" id="btn_delete">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </section>

        <footer>
        </footer>
    </div>

</body>
</html>
