<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Merszol Bt.</title>
</head>
<body>

    <!-- A weboldalam navigációs menüje -->
    <nav   nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Merszol Bt.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Kezdőoldal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Szolgáltatásaink</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="references.php">Referenciák</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Galéria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="quotation.php">Árajánlat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="about.php">Kapcsolat</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- A weboldalam kapcsolat része -->
<div class="container-fluid bg-dark text-light py-5">

<h2 class="text-center">Kapcsolat</h2>

<div class="container" id="form-container">
    <div class="row justify-content-center mt-4">

      <form action="" method="post" class="bg-dark text-light p-5 text-center">

        <div class="input-group mb-4">
          <span class="input-group-text"> <i class="fas fa-user"></i> </span>
          <input type="text" class="form-control" placeholder="Név..." >
        </div>

        <div class="input-group mb-4">
          <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
          <input type="email" class="form-control" placeholder="E-mail cím...">
        </div>

        <textarea class="form-control mb-4" id="" cols="30" rows="10" placeholder="Üzenet..."></textarea>

        <button class="btn btn-light">Küldés</button>

      </form>

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>