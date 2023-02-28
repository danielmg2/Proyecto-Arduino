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

            <div class="carousel-item" data-bs-interval="2000">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Mensual </h2>
                    <canvas class="container h-75 w-75" id="chart2"> </canvas>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Semanal </h2>
                    <canvas class="container h-75 w-75" id="chart3"> </canvas>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card d-flex align-items-center">
                    <h2 class="card-title m-3" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;"> Diario </h2>
                    <canvas class="container h-75 w-75 " id="chart4"> </canvas>

<div >

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
</div>