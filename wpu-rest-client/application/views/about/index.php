<!-- About -->
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>About My Project</h2>
    </div>
  </div>

  <!-- Portfolio -->
      <section class="portfolio" id="portfolio">
          <div class="row">
            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 1.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>JSON</h5>
                  <p class="card-text flex-grow-1">Latihan API menggunakan file JSON untuk pembelajaran dasar.</p>
                  <a href="<?= base_url(); ?>../json/latihan1.php" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 2.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>WPU-HUT</h5>
                  <p class="card-text flex-grow-1">Latihan API menggunakan file JSON berbasis website untuk pembelajaran.</p>
                  <a href="<?= base_url(); ?>../wpu-hut/latihan2.html" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 3.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>WPU-MOVIE</h5>
                  <p class="card-text flex-grow-1">Latihan API menggunakan Public API OMDb berbasis website untuk data film.</p>
                  <a href="<?= base_url(); ?>../wpu-movie/index.html" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div>   
          </div>

          <div class="row">
            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 4.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>WPU-PORTFOLIO</h5>
                  <p class="card-text flex-grow-1">Latihan API menggunakan Public API Youtube dan Instagram dengan cURL berbasis website.</p>
                  <a href="<?= base_url(); ?>../wpu-portfolio/index.php" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div> 
            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 5.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>WPU-REST-SERVER</h5>
                  <p class="card-text flex-grow-1">Membuat Rest Server menggunakan framework CodeIgniter3 untuk backend API.</p>
                  <a href="<?= base_url(); ?>../wpu-rest-server/" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div>

            <div class="col-md mb-4 d-flex">
              <div class="card flex-fill">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/foto 6.png" alt="Card image cap" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5>WPU-REST-CLIENT</h5>
                  <p class="card-text flex-grow-1">Membuat Rest Client menggunakan framework CodeIgniter3 untuk konsumsi API.</p>
                  <a href="<?= base_url(); ?>home" class="card-link see-detail mt-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Project</a>
                </div>
              </div>
            </div>
          </div>