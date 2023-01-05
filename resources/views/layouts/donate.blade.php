<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donate Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body >
      <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm ">
        <div class="container">
          <!-- <span class="navbar-brand mb-0 h1 text-danger fw-bold fs-500">BENJI</span> -->
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>

          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

            <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>


            <!-- <span class="navbar-toggler-icon navbar-primary"></span> -->
         </button>

         <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#Home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#About" class="nav-link">About us</a></li>
                <li class="nav-item">
                    <a href="/" class="nav-link active">Donations</a>
                </li>
                <li class="nav-item">
                    <!-- <a href="#Portofolio" class="nav-link">Portofolio</a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#Testimonials" class="nav-link">Testimonials</a> -->
                </li>
                <li class="nav-item">
                    <a href="#Contact" class="nav-link">Contact</a>
                </li>
            </ul>

        </div>
      </nav>
      <div class="container">
        {{ $slot }}


      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
