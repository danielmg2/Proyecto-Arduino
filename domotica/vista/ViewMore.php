<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

    <div class="container-fluid col-6 border border-dark">

        <h2 class="display-5"> Filtros </h2>

        <form action="index.php">

            <div class=" col-6 mb-3">
                <h5>Por fecha</h5>
            </div>

            <div class=" col-6 mb-3">
                <label for="input1" class="form-label">Fecha Inicio</label>
                <input type="datetime-local" class="form-control" id="fechaInicio" aria-describedby="fechaInicio">
            </div>

            <div class="col-6 mb-3">
                <label for="input1" class="form-label">Fecha Final</label>
                <input type="datetime-local" class="form-control" id="fechaFinal" aria-describedby="fechaFinal">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-success" id="confirmar" value="Filtrar">
            </div>

        </form>

    </div>

    <div class="container-fluid col-6 m-5">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Personas</th>
                    <th scope="col">Temperatura</th>
                    <th scope="col">Luminosidad</th>
                    <th scope="col">Humedad</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>