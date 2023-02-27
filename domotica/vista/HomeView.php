<div id="carouselGraficos" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="carousel-inner p-5">

        <div class="carousel-item active border border-dark" data-bs-interval="10000">

            <div class="card d-flex align-items-center">
                <h2 class="card-title m-3"> Humedad </h2>
                <canvas class="container border border-dark" id="chartHumedad"> </canvas>
            </div>

        </div>

        <div class="carousel-item border border-dark" data-bs-interval="2000">
            <div class="card d-flex align-items-center">
                <h2 class="card-title m-3 border border-dark"> Temperatura </h2>
                <canvas class="container border border-dark" id="chartTemperatura"> </canvas>
            </div>
        </div>

        <div class="carousel-item border border-dark">
            <div class="card d-flex align-items-center">
                <h2 class="card-title m-3"> Luminosidad </h2>
                <canvas class="container border border-dark" id="chartLuminosidad"> </canvas>
            </div>
        </div>

        <div class="carousel-item border border-dark">
            <div class="card d-flex align-items-center">
                <h2 class="card-title m-3"> Personas </h2>
                <canvas class="container border border-dark " id="chartPersonas"> </canvas>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGraficos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselGraficos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <div class="d-flex align-items-center justify-content-center">
        <button type="button" class="active mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"><i class="bi bi-thermometer-half"></i> Temperatura </button>
        <button type="button" class="mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="1" aria-label="Slide 2"><i class="bi bi-droplet-half"></i> Humedad </button>
        <button type="button" class="mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="2" aria-label="Slide 3"><i class="bi bi-person-fill"></i> Personas</button>
        <button type="button" class="mx-5" data-bs-target="#carouselGraficos" data-bs-slide-to="3" aria-label="Slide 4"><i class="bi bi-brightness-high"></i> Luminosidad </button>
    </div>


</div>