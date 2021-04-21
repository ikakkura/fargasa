<!DOCTYPE html>
<html>

<head>
  <title>FARGASA MOBILINDO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="css/style.css"/> -->
  <link rel="icon" type="image/png" href="/assets/Fargasa Logo Circle.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/dist/css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" id="brandMobile" href="/">
      <img class="" src="/assets/Fargasa Logo Circle.png" alt="Dashboard" style="width: 80px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">CATALOG</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">PROMO</a>
        </li>
      </ul>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-3" id="brandPC">
          <a class="navbar-brand" href="/">
            <img class="" src="/assets/Fargasa Logo Circle.png" alt="Dashboard" style="width: 80px">
          </a>
        </li>
      </ul>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-3 dropdown">
          <a class="nav-link" href="#">PROFIL</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script src="/dist/js/jquery-3.5.1.js"></script>
  <script src="/dist/js/bootstrap.js"></script>
</body>
<script>
  if ($(window).width() < 768) {
    $('#brandMobile').show();
    $('#brandPC').hide();
  } else {
    $('#brandPC').show();
    $('#brandMobile').hide();
  }
</script>

</html>

<a href="/?action=login">Login</a>