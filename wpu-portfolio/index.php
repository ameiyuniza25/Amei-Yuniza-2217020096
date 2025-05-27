<?php
function get_Curl($url)

{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC-GMlcfKl7Bjv_sIH2SxILA&key=AIzaSyCg2msO-kwK4uwkZmyyBD1IokLL99bntYY");

$youtubeProfilePic = $result['items'][0]['snippet'] ['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latest video
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCg2msO-kwK4uwkZmyyBD1IokLL99bntYY&channelId=UC-GMlcfKl7Bjv_sIH2SxILA&maxResults=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

//instagram API
$clientID = "1231801908394434";
$accessToken = "IGAAasMDPqzX1BZAFBMc2tyNU1ubVNrcjVoRHEwU0NFajhtdHFsVzI2OGpTSHNvZAzRPbjJFN0ZAteFVuR2tWUndTWGIyWTlXR0M5OTRyNzVWTGRNMjdzcjFnMWRwTENZAUUpGSUNJX3RxaUVjd3ZAjUXg3aHJHdmJ2Uk9JLXFzZA1NlbwZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAasMDPqzX1BZAFBMc2tyNU1ubVNrcjVoRHEwU0NFajhtdHFsVzI2OGpTSHNvZAzRPbjJFN0ZAteFVuR2tWUndTWGIyWTlXR0M5OTRyNzVWTGRNMjdzcjFnMWRwTENZAUUpGSUNJX3RxaUVjd3ZAjUXg3aHJHdmJ2Uk9JLXFzZA1NlbwZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

//media IG
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/17848942944356144?fields=media_url&access_token=IGAAasMDPqzX1BZAFBMc2tyNU1ubVNrcjVoRHEwU0NFajhtdHFsVzI2OGpTSHNvZAzRPbjJFN0ZAteFVuR2tWUndTWGIyWTlXR0M5OTRyNzVWTGRNMjdzcjFnMWRwTENZAUUpGSUNJX3RxaUVjd3ZAjUXg3aHJHdmJ2Uk9JLXFzZA1NlbwZDZD");

$resultGambar2 = get_Curl("https://graph.instagram.com/v22.0/17873767689071289?fields=media_url&access_token=IGAAasMDPqzX1BZAFBMc2tyNU1ubVNrcjVoRHEwU0NFajhtdHFsVzI2OGpTSHNvZAzRPbjJFN0ZAteFVuR2tWUndTWGIyWTlXR0M5OTRyNzVWTGRNMjdzcjFnMWRwTENZAUUpGSUNJX3RxaUVjd3ZAjUXg3aHJHdmJ2Uk9JLXFzZA1NlbwZDZD");


$gambar1 = $resultGambar1['media_url'];
$gambar2 = $resultGambar2['media_url'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Amei Yuniza</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/foto.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Amei Yuniza</h1>
          <h3 class="lead">Student | Coding | Reading</h3>
        </div>
      </div>
    </div>


   <!-- About -->
<section class="about" id="about">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2>About</h2>
      </div>
    </div>
    <div class="row justify-content-center align-items-stretch">
      <div class="col-md-5 d-flex">
        <p class="about-text text-justify">
          Saya adalah seorang pengembang web yang memiliki ketertarikan dalam membangun aplikasi berbasis web yang bisa digunakan untuk membantu pekerjaan sehari-hari. Saya sudah terbiasa menggunakan PHP, MySQL, HTML, dan CSS untuk membuat sistem yang sederhana namun fungsional. Salah satu pengalaman saya adalah saat mengembangkan sistem pengarsipan dokumen digital (SIPANDA) di Bappeda Kota Padang, di mana saya ikut terlibat dalam membuat tampilan dan logika sistem, serta membagi akses pengguna berdasarkan peran.
        </p>
      </div>
      <div class="col-md-5 d-flex">
        <p class="about-text text-justify">
          Selain aplikasi SIPANDA, saya juga mengembangkan beberapa aplikasi lain sebagai latihan dan pengembangan kemampuan. Saya terus belajar dan berusaha membuat solusi yang sederhana, fungsional, dan sesuai kebutuhan pengguna agar dapat memberikan manfaat nyata dalam pekerjaan sehari-hari.
        </p>
      </div>
    </div>
  </div>
</section>


    <!-- Youtube & IG -->
     <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
               <div class="g-ytsubscribe" data-channelid="UC-GMlcfKl7Bjv_sIH2SxILA" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $usernameIG ?></h5>
                <p><?= $followersIG ?> Followers.</p>
              </div>
            </div>

             <div class="row mt-3 pb-3">                  
                <div class="col">                      
                    <div class="ig-thumbnail-row">                          
                        <div class="ig-thumbnail" style="margin-right: 20px;">                              
                            <img src="<?= $gambar1; ?>" style="max-width: 150px; height: auto;">                          
                        </div>                          
                        <div class="ig-thumbnail">                              
                            <img src="<?= $gambar2; ?>" style="max-width: 150px; height: auto;">                          
                        </div>                      
                    </div>                  
                </div>              
              </div>
            </section>

    
<!-- Portfolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Portfolio</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/sipanda.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Dashboard utama sistem pengarsipan dokumen digital dengan menu navigasi berbasis kartu untuk berbagai bidang di Bappeda Kota Padang.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/sipanda1.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Halaman login sistem SIPANDA dengan tampilan modern menggunakan foto gedung Bappeda sebagai background dan form login yang clean.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/sipanda2.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Halaman manajemen data surat untuk bagian Sekretariat dengan tabel lengkap berisi informasi surat masuk dan keluar.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/cuci.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Dashboard aplikasi Cuci dengan statistik transaksi real-time dalam 4 kartu monitoring untuk Total Transaksi Hari Ini, Total Transaksi, Pemasukan Hari Ini, Pemasukan Bulan Ini.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/cuci1.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Halaman pengelolaan data biaya kendaraan dengan tabel yang menampilkan jenis kendaraan, biaya, dan opsi tindakan untuk setiap record.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md mb-4 d-flex">
        <div class="card h-100">
          <img class="card-img-top" src="img/thumbs/cuci2.png" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <p class="card-text flex-grow-1 text-justify">Halaman login dengan desain minimalis menggunakan logo bulat dan form login sederhana dengan tema gelap yang modern.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Tertarik berkolaborasi? Hubungi saya untuk membahas bagaimana kita dapat menciptakan solusi digital yang bermakna bersama.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My House</li>
              <li class="list-group-item">Perumahan Taman Anugrah</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>