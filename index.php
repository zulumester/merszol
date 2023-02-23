<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

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

      <!-- A weboldalam teljes képernyős képes/szöveges háttere -->
      <section id="bg" class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div>
                    <h1 class="display-1">Üdvözöljük Oldalunkon!</h1>
                    <p class="lead">Cégünk, több éves szakmai tapasztalat birtokában, maximális igényességgel igyekszik kiszolgálni megrendelőit. Felismerve a piac igényeit, főleg mérő és vizsgáló eszközök gyártása, fejlesztése és karbantartása területén fejti ki tevékenységét. Mérőeszközeinket, berendezéseinket a megrendelők igényeinek megfelelően az érvényes szabványok előírásai szerint gyártjuk. Az eszközök tervezése, gyártása, szükség esetén beszerzése mellett szakmai és mérésügyi tanácsokkal is ellátjuk megrendelőinket.
                    <p class="lead">Annak ellenére, hogy termékeink többnyire egyediek, igyekszünk árainkat reális szinten tartani, mindemellett nagy figyelmet fordítva szolgáltatásaink minőségére, a vállalt határidők betartására.</p>
                    <p class="lead">Kalibrálási és mérésügyi tapasztalatainkat felhasználva, ezen a területen is készséggel állunk az érdeklődők, megrendelők szolgálatára.</p>
                    
                    
                </div>
            </div>
        </div>
      </section>

      <!-- A weboldalam szolgáltatások része -->
      <div class="container-fluid bg-dark text-light" id="services">

          <h2 class="text-center">Szolgáltatásaink</h2>
        

          <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 col-lg-4">
                    <h4>Gyártás</h4>
                    <ul>
                        <li>Tárcsás teherbírás-mérő</li>
                        <li>Billenő-karos behajlás-mérő</li>
                        <li>3 és 4 méteres alumínium mérőléc</li>
                        <li>Mérőék</li>
                        <li>Proctor és Marshall edények</li>
                        <li>Nyitható CBR edények</li>
                        <li>Helyszíni talaj szivárgásmérő (infiltrométer)</li>
                        <li>Laboratóriumi talaj vízáteresztő képesség vizsgáló berendezés</li>
                        <li>Ejtő-asztal, frissbeton vizsgálathoz</li>
                        <li>Beton roskadás-mérő</li>
                        <li>Egyéb, egyedi mérő és vizsgáló készülék, berendezés, segédeszköz</li>
                        <li>Laboratóriumi bútorzat</li>
                    </ul>
                    <p>(Az felsorolt eszközök, berendezések gyártása az érvényben lévő szabványok előírásainak megfelelően történik)</p>
                    <a href="quotation.php"><button class="btn btn-light">Érdekel</button></a>
                </div>

                <div class="col-md-12 col-lg-4">
                    <h4>Szervízszolgáltatás</h4>
                    <ul>
                      <li>ÚT-02-es karbantartás, javítás, felújítás</li>
                      <li>ÚT-02-es átalakítás láncmeghajtásra</li>
                      <li>Proctor és Marshall tömörítő karbantartás, javítás, beállítás</li>
                      <li>Szitafelújítás</li>
                      <li>Mérőóra javítás</li>
                      <li>Könnyű-ejtősúlyos készülékjavítás</li>
                      <li>SRT inga javítás</li>
                      <li>Egyéb laboreszköz karbantartása, javítása</li>
                      <li>Alkatrészbeszerzés</li>
                    </ul>
                    <a href="quotation.php"><button class="btn btn-light">Érdekel</button></a>
                </div>

                <div class="col-md-12 col-lg-4">
                    <h4>Egyéb szolgáltatások</h4>
                    <ul>
                      <li>Egyedi laboratóriumi mérő és vizsgáló eszközök, berendezések szabványos előrásoknak megfelelő tervezése, kivitelezése</li>
                      <li>Méréstechnikai szaktanácsadás</li>
                      <li>Mérőeszköz felügyelet</li>
                      <li>Eszközbeszerzés</li>
                      <li>Kalibrálási és kalibráltatási tanácsadás és ügyintézés</li>
                    </ul> 
                    <a href="quotation.php"><button class="btn btn-light">Érdekel</button></a>
                </div>
            </div>
         </div>
        </div>

         <!-- A weboldalam referenciák része -->
      <div class="container-fluid bg-light text-dark" id="services">
          <h2 class="text-center">Referenciák</h2>
        

          <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-13 col-lg-3">
                    <ul>
                       <li>COLAS Hungária Zrt</li>
                       <li>EULAB Kft, Dunakeszi</li>
                       <li>FIGHT Kft, Nyíregyháza</li>
                       <li>Gyorsextra Bt, Budapest</li>
                       <li>HÓDÚT Kft, Tiszakécske</li>
                       <li>Innoteszt, Üllő</li>
                       <li>Magyar Közút Nonprofit Zrt</li>
                       <li>Master Way Kft, Tiszakécske</li>
                       <li>Mérnök-Mártix Bt, Öttevény</li>
                       <li>Multilab Kft, Budapest</li>
                       <li>PASCAL Kft, Vésztő</li>
                       <li>Premier Kft, Gyál</li>
                       <li>Társas Szövetkezet, Jászapáti</li>
                       <li>TPA HU Kft, Budapest</li>
                       <li>ÚTLABOR Kft, Abda</li>
                    </ul>
                </div>
            </div>
         </div>
      </div>

 <!-- A weboldalam galéria része -->     
<div class="container-fluid bg-dark text-light" id="services">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
      <a href="/img/Fotó-6-155x100.png">
        <img src="/vizsgaremek/img/Fotó-6-155x100.png" alt="Eszköz 1" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/img/Fotó-3-155x100.png">
        <img src="/vizsgaremek/img/Fotó-3-155x100.png" alt="Eszköz2" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/img/Fotó-1-155x100.png">
        <img src="/vizsgaremek/img/Fotó-1-155x100.png" alt="Eszköz 3" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- A weboldalam árajánlat kérés része -->

<div class="container-fluid bg-light text-dark" id="services">

          <h2 class="text-center">Árajánlat</h2>
        

          <div class="container">
            <div class="row justify-content-center mt-5">
                
            </div>
         </div>

<!-- A weboldalam kapcsolat része -->
<div class="container-fluid bg-dark text-light py-5">

<h2 class="text-center">Kapcsolat</h2>

<div class="container" id="form-container">
    <div class="row justify-content-center mt-4">

      <form action="" method="post" class="bg-light text-dark p-5 text-center">

        <div class="input-group mb-4">
          <span class="input-group-text"> <i class="fas fa-user"></i> </span>
          <input type="text" class="form-control" placeholder="Név..." >
        </div>

        <div class="input-group mb-4">
          <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
          <input type="email" class="form-control" placeholder="E-mail cím...">
        </div>

        <textarea class="form-control mb-4" id="" cols="30" rows="10" placeholder="Üzenet..."></textarea>

        <button class="btn btn-dark">Küldés</button>

      </form>

    </div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>