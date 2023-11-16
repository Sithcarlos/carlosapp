<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTADO DE CLIENTES y formulario para guardar | CarlosApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>LISTADO DE CLIENTES y formulario para guardar</h1>

    <div class="container">
        <!-- Content here -->

        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif



                    <form method="POST" action="/guardar">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre (no mas de 10 caracteres)</label>
                            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" maxlength="11">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputApellido1" class="form-label">Apellido (no mas de 10
                                caracteres)</label>
                            <input type="text" name="apellido" class="form-control" id="exampleInputApellido1"
                                maxlength="11">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                            </tr>
                        </thead>
                        <tbody>



                            @forelse ($clientes as $row)
                            <tr>

                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->nombre }} </td>
                                <td>{{ $row->apellido }}</td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="{{ url('/editar/'.$row->id ) }}">Editar</a>
                                </td>
                            </tr>
                            @empty
                            <td>NO HAY DATOS</td>

                            @endforelse




                        </tbody>



                    </table>


                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>