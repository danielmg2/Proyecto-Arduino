<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-center">
        <button type="button" class="active mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"> Anual </button>
        <button type="button" class="my-3 mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="1" aria-label="Slide 2"> Mensual </button>
        <button type="button" class="my-3 mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="2" aria-label="Slide 3"> Semanal</button>
        <button type="button" class="my-3 mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="3" aria-label="Slide 4"> Diario </button>
    </div>

    <div id="carouselGraficos" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">

                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Anual </h2>
                    <canvas class="container h-75 w-75" id="chart1"> </canvas>
                </div>

            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Mensual </h2>
                    <canvas class="container h-75 w-75" id="chart2"> </canvas>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Semanal </h2>
                    <canvas class="container h-75 w-75" id="chart3"> </canvas>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Diario </h2>
                    <canvas class="container h-75 w-75 " id="chart4"> </canvas>
                </div>
            </div>
        </div>
    </div>
</div>