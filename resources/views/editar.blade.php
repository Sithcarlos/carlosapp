<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDITAR UN CLIENTE | CarlosApp </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>EDITAR UN CLIENTE</h1>

    <div class="container">
        <!-- Content here -->

        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">


                </div>
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



                    <form method="POST" action="/editar/{{$cliente->id}}">
                        @csrf

                        <div class="mb-3">

                            <span>
                                EDITAR USUARIO ID {{ $cliente->id }}, nombre {{ $cliente->nombre }}, apellido {{
                                $cliente->apellido }},

                            </span></br>
                            <label for="exampleInputEmail1" class="form-label">NUEVO Nombre (no mas de 10
                                caracteres)</label>
                            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" maxlength="11">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputApellido1" class="form-label">NUEVO Apellido (no mas de 10
                                caracteres)</label>
                            <input type="text" name="apellido" class="form-control" id="exampleInputApellido1"
                                maxlength="11">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>



                        <a class="btn btn-warning" href="{{ url('/' ) }}">
                            Cancelar
                        </a>


                    </form>

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