<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donate Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(209, 209, 209);">
      <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm ">
        <div class="container">
          <!-- <span class="navbar-brand mb-0 h1 text-danger fw-bold fs-500">BENJI</span> -->
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

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
        <div class="row text-justify align-itens-center mx-5">

            <img src="{{ asset('images/logo.png') }}" width="25px" height="100px" alt="">
            <h3 class="my-4">Donations</h3>
            <p>
                We accept all in-kind donations at our office at 314 Booth Street, donations are stored centrally and distributed to all Cornerstone locations, including our emergency shelter. We appreciate your support and are very grateful that you have taken the time to donate to us.
            </p>
            <p>
                If you have items to donate or have any questions please contact our Resource Development Team at <a href="mailto:donate@cornerstonewomen.ca">donate@cornerstonewomen.ca</a> or by calling us at Tel: 613-254-6584, Ext. 521 to book a donation drop-off appointment. Your generosity makes women’s lives better!
            </p>
            <p>
                We only take items on our list and need to schedule all drop-offs. Please note we do not accept any clothing, furniture, or children's items.

                Thank you so much for donating to a woman or gender-diverse person in need of items. You give us hope! We greatly appreciate your support.
            </p>
        </div>
        <div class="row m-5">
          @foreach ($residences as $item)
            <div class="card p-2 my-2 mx-2" style="width: 20rem;">
                <img src="{{ $item->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">
                    Urgent Needs:
                    <ul>
                        @foreach ($item->article as $article)
                            @if ($item->quantity ==0)
                                <li><u>{{ $item->name }} ({{ $item->quantity }})</u></li>
                            @else
                                <li>{{ $item->name }} ({{ $item->quantity }})</li>
                            @endif
                        @endforeach
                    </ul>
                  </p>
                  <a href="{{ route('donate',$item->id) }}" class="btn btn-primary">Donate</a>
                </div>
            </div>

          @endforeach
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>


  </body>
</html>
