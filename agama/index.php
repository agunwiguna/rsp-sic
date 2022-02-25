<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RSP Online</title>
  <link rel="icon" type="image/x-icon" href="asset/img/sic.png">
	<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="../asset/css/sign-in.css" rel="stylesheet">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center">

<main class="form-signin">
  <form action="soal.php" method="POST">
    <img class="mb-4" src="../asset/img/sic.png" alt="Logo Informatika" height="77">
    <h1 class="h3 mb-3 fw-normal">RSP ONLINE - KEAGAMAAN</h1>
    <p>
      Isilah Identitas di bawah ini dengan benar!
    </p>  
    <div class="form-floating">
      <input type="text" class="form-control" id="nama" name="nama" required autofocus>
      <label for="nama">Nama Lengkap</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="asal" name="asal" required>
      <label for="asal">Asal SMP/MTs</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-muted">&copy; B-Lab SMA Informatika Ciamis 2022</p>
  </form>
</main>

</body>
</html>