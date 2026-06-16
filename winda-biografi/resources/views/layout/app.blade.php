<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Winda Pratiwi</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    /* NAVBAR */
    .navbar {
      background-color: #800000;
    }

    .nav-link {
      color: white !important;
      margin-right: 10px;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #ffcccc !important;
    }

    .navbar-brand {
      color: white !important;
    }

    /* SLIDER */
    .carousel-item {
      height: 420px;
      background: url('{{asset('storage/asset/images/wowin.jpg')}}') center/cover no-repeat;
      position: relative;
      color: white;
    }

    .carousel-item::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(128, 0, 0, 0.5);
      top: 0;
      left: 0;
    }

    .content {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      animation: fadeUp 1s ease;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* SECTION */
    .section {
      padding: 60px 0;
      text-align: center;
    }

    /* IKON BULAT */
    .icon-box {
      width: 120px;
      height: 120px;
      border: 2px solid #800000;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: auto;
      font-size: 40px;
      color: #800000;
      transition: 0.3s;
    }

    .icon-box:hover {
      background-color: #800000;
      color: white;
      transform: scale(1.1);
    }

    /* TENTANG */
    .about {
      padding: 60px 20px;
      text-align: center;
      background-color: #f8f8f8;
    }

    /* FOOTER */
    .footer {
      background-color: #800000;
      color: white;
      text-align: center;
      padding: 15px;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">

    <a class="navbar-brand fw-bold" href="#">Winda Pratiwi</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto align-items-center">

        <li class="nav-item">
          <a class="nav-link active" href="#">Beranda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Hobi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>

        <li class="nav-item ms-3">
          <a href="#" class="btn btn-light text-dark">Profil</a>
        </li>

      </ul>
    </div>

  </div>
</nav>






@yield('content')

<!-- FOOTER -->
<div class="footer">
  <p>© 2026 Winda Pratiwi</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
