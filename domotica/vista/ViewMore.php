<div class="container-fluid d-flex flex-column col-6 justify-content-center mt-5 mb-5" id="filtros">

    <h2 class="align-self-center mt-4" style="font-size: 50px;"> Filtros </h2>

    <form action="index.php">

        <div class="mb-3">
            <h5>Por fecha:</h5>
        </div>

        <div class="mb-3 ms-5">
            <label for="input1" class="form-label">Fecha Inicio</label>
            <input type="datetime-local" class="form-control" id="fechaInicio" aria-describedby="fechaInicio">
        </div>

        <div class="mb-3 ms-5">
            <label for="input1" class="form-label">Fecha Final</label>
            <input type="datetime-local" class="form-control" id="fechaFinal" aria-describedby="fechaFinal">
        </div>

        <div class="mb-3 d-flex justify-content-end">
            <input type="submit" class="btn confirmar" id="confirmar" value="Filtrar">
        </div>

    </form>

    <form action="index.php">

        <div class="mb-3">
            <h5>Por Actuador:</h5>
        </div>

        <div class="mb-3 ms-5">
            <select class="form-select" id="actuador" aria-label="Actuador">
                <option selected>Selecciona un actuador</option>
                <option value="ventilador"> Ventilador </option>
                <option value="luz"> Luz </option>
                <option value="persianas"> Persianas </option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-end">
            <input type="submit" class="btn confirmar" id="aceptar" value="Filtrar">
        </div>
    </form>

</div>

<div class="container-fluid p-2">
    <table class="table table-striped">
        <thead style="background-color:#AC6238">
            <tr>
                <th scope="col">FECHA</th>
                <th scope="col">PERSONAS</th>
                <th scope="col">TEMPERATURA</th>
                <th scope="col">LUMINOSIDAD</th>
                <th scope="col">HUMEDAD</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>R1C3</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>R1C3</td>
                <td>R1C3</td>
            </tr>
        </tbody>
    </table>
</div>
</div>