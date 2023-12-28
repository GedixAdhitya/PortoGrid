<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PortoGrid</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="text-primary">Porto</span><span class="text-warning">Grid</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Feedback">Feedback</a>
          </li>
        </ul>
        <div class="nav-item">
          <a class="nav-link custom-portfolio" href="portofolio.php"><span class="text-primary">Portofolio</span></a>
        </div>
      </div>
    </div>
  </nav>

  <section id="Home" class="Home-section-padding">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="img/img6.jpg" class="d-block w-100 c-img" alt="Slide 1">
          <div class="carousel-caption top-1 mt-4 text-center">
            <h1 class="display-2 fw-bolder text-uppercase">Eksplorasi Keindahan Dunia Melalui Lensa</h1>
            <p class="mt-3 fs-4 ">Temukan dunia dalam setiap klik dengan koleksi gambar spektakuler</p>
            <a href="#About" class="btn btn-primary px-3 py-2 fs-6 fw-bolder text-uppercase">Read More</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="img/img2.jpg" class="d-block w-100 c-img" alt="Slide 2">
          <div class="carousel-caption top-1 mt-4 text-center">
            <h1 class="display-2 fw-bolder text-uppercase">Kisah Visual yang Menginspirasi</h1>
            <p class="mt-3 fs-4 ">Dalam setiap gambar, terdapat cerita yang memukau. </p>
            <a href="#About" class="btn btn-primary px-3 py-2 fs-6 fw-bolder text-uppercase">Read More</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="img/img3.jpg" class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-1 mt-4 text-center">
            <h1 class="display-2 fw-bolder text-uppercase">Ekspresikan Diri Anda Melalui Fotografi</h1>
            <p class="mt-3 fs-4 ">Buatlah momen berharga Anda sendiri atau nikmati seni fotografi dari perspektif berbeda.</p>
            <a href="#About" class="btn btn-primary px-3 py-2 fs-6 fw-bolder text-uppercase">Read More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section id="About" class="About section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="./img/image-31.jpg" alt="" class="img-fluid prof-img">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>Tampilan Keindahan Melalui Lensa: <br> Galeri Portogrid Kami</h2>
            <p>Di sini, kami mengundang Anda untuk merasakan keajaiban fotografi, di mana keindahan dunia diungkapkan melalui rangkaian gambar yang tak hanya memikat mata, tetapi juga menyentuh hati Anda. Setiap sudut dunia tersaji dalam karya seni visual kami yang menawan, yang menghadirkan pengalaman luar biasa. Kami mengundang Anda untuk menjelajahi galeri kami dan membiarkan setiap foto menjelajahi cerita mereka sendiri, membawa Anda dalam perjalanan yang memikat, inspiratif, dan penuh makna.</p>
            <a href="portofolio.php" class="btn btn-primary fw-bolder text-uppercase">Portofolio</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Team" class="Team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>OUR TEAM</h2>
            <p>
              Perkenalan dari Tim PORTOGRID
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 mb-4 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="https://cdn.discordapp.com/attachments/1108217888457896007/1164943699780841472/IMG_6084.jpg?ex=65450d5d&is=6532985d&hm=3bdd5ddce4f68029f3faa39979820094fe1c3466d81eb2a320a665a03328cf8f&" alt="" class="img-fluid rounded-circle cardimg">
                <h3 class="card-title py-2">Gede Cri Adhitya</h3>
                <p class="card-text">2101020049</p>
                <p class="socials">
                  <a href="https://www.instagram.com/gedixaws/" class="bi bi-instagram text-dark mx-1" target="_blank"></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="https://cdn.discordapp.com/attachments/904945570282610700/1164945790855286814/IMG-20230522-WA0014.jpg?ex=65450f50&is=65329a50&hm=7f5c071ec0f6156aae7758546ff7158eaa1aaae041d89614b74867893eb82c2e&" alt="" class="img-fluid rounded-circle cardimg">
                <h3 class="card-title py-2">Angga Palguna</h3>
                <p class="card-text">2101020037</p>
                <p class="socials">
                  <a href="https://www.instagram.com/angga_pal9/" class="bi bi-instagram text-dark mx-1" target="_blank"></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="./img/imgwira.jpg" alt="" class="img-fluid rounded-circle cardimg">
                <h3 class="card-title py-2">Gung Wira</h3>
                <p class="card-text">2101020033</p>
                <p class="socials">
                  <a href="https://www.instagram.com/wirasattvikaa/" class="bi bi-instagram text-dark mx-1" target="_blank"></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="https://cdn.discordapp.com/attachments/904945570282610700/1165885248270250094/WhatsApp_Image_2023-10-23_at_13.30.44_a1069f98.jpg?ex=65487a40&is=65360540&hm=829a0aca540d00cca21a411c372bcf42fde86dcd75cd789e86ce6d43653a2adb&" alt="" class="img-fluid rounded-circle cardimg">
                <h3 class="card-title py-2">Mutiara</h3>
                <p class="card-text">2101020048</p>
                <p class="socials">
                  <a href="https://www.instagram.com/ara_setiawati/" class="bi bi-instagram text-dark mx-1" target="_blank"></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="./img/imgmr.jpg" alt="" class="img-fluid rounded-circle cardimg">
                <h3 class="card-title py-2">Merta Argawa</h3>
                <p class="card-text">2101020063</p>
                <p class="socials">
                  <a href="https://www.instagram.com/merta.argawa_/" class="bi bi-instagram text-dark mx-1" target="_blank"></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="Feedback" class="Feedback section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>FEEDBACK</h2>
            <p>
              Silahkan untuk mengisi Feedback untuk Tim PORTOGRID
            </p>
          </div>
        </div>
      </div>

      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 pb-4">
          <form action="admin/feedback-process.php" method="post" class="bg-light p-4.m-auto">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" class="form-control" name="name" required placeholder="Your full name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Your email here">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea rows="3" requared class="form-control" name="query" placeholder="Your query here" required></textarea>
                </div>
              </div>
              <button type="submit" value="Simpan" class="btn btn-primary btn-lg btn-blok mt-3 fw-bolder text-uppercase">Send now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark p-2 text-center">
    <div class="container">
      <p class="text-white">
        All Right Reserved @PORTOGRID
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>