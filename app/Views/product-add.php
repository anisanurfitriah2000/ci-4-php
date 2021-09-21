<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?> ">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('product') ?>">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('history') ?>">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="product mt-5">Tambah Product</h3>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p> Silahkan isi form dibawah ini untuk menambahkan product ! </p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            </div>
        </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('product/save') ?>">
        <?= csrf_field(); ?>
        <?php  foreach ($productx as $row){}  ?>
        <?php  $s= substr('BJ-04', 0, 4);$l= substr($row->id_barang, 3); ?>

        <div class="mb-3">
                <label for ="idBarang" class="form-label">ID Barang</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" aria-describedby="" readonly value="<?= $s, ++$l; ?>" >
        </div>
        <div class="mb-3">
                <label for ="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" aria-describedby=""  >
        </div>
        <div class="mb-3">
                <label for ="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" aria-describedby="">
        </div>
        <div class="mb-3">
                <label for ="idBarang" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" aria-describedby="">
        </div>
        <div class="mb-3">
                Publish
                <input type="radio" class="" id="status" name="status" value="published"  aria-describedby="" checked="checked" >
                Ya
                <input type="radio" class="" id="status" name="status" value="no"  aria-describedby="">
                Tidak
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<footer class="jumbroton jumbroton-fluid mt-5 mb-0">
            <div class="container text-center">Copyright &copy <?= Date('Y') ?> Anisa </div> 
</footer>

            <!-- Jquery dan Bootstrap JS -->
            <script src="<? base_url('js/query.min.js') ?>"</script>
            <script src="<? base_url('js/bootstrap.min.js') ?>"</script>
        </body>

