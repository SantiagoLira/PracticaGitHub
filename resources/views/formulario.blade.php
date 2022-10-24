<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="card-header bg-info fw-bold">
            Formulario
        </div>

    @if (session()->has('correcto'))
        {!! "<script>
            Swal.fire(
            'Todo bien',
            'Redireccionando...',
            'success'
            )
        </script>" !!}
        
    @endif

    @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show shadow-lg p-3 rounded" role="alert">
                    <strong>Formulario Incompleto.. {{ $error }} Favor de revisar..</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        <form action="comprobarFormulario" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">usuario</label>
                <input type="email" class="form-control" name="inputEmail"id="inputEmail" aria-describedby="emailHelp">
                <p class="text-danger">{{ $errors->first('inputEmail') }}</p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="inputPassword"id="inputPassword">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
