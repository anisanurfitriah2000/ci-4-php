<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website anisa Nurfitiah</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>"/>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url()?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('abaut')?>">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('product')?>">Product</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('histroy')?>">History</a>
          </li>
        </ul>
      </div>
      </div>
      </nav>

      <header class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="row">
          <div class="h3"> websitenya anisa nurfitriah</h3>
          </div>
        </div>
      </div>
      </header>

      <div class="container">
        <div class="row">
           <div class="col-md-12 my-2 card bg-secondary text-white">
             <div class="card-body">
              <h5 class="h5">Yeay</h5>
              <p> SELAMAT ANDA BERHASIL MASUK WEBSITENYA ANISA NURFITRIAH !!</p>
            </div>
          </div>
        </div>
      </div>

      <footer class="jumbotron jumbotron-flued mt-5 mb-0">
        <div class="container text-center">copyright &copy <?= Date('Y') ?> Anisa</div>
      </footer>

      <!-- Jquery dan Bootsrap JS -->
      <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
</body>
</html>

