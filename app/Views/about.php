<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>"/>

</head>
<body>
   <?php include 'navbar.php'?>
        <header class="jumbotron">
            <div class="container">
             <div class="row">
                <div class="col-md-12">
                  <h3 class="h3">About us</h3>
                  <h3 class="h3">Nama saya:<?=$nama?>!</h3>
                  
                  </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
			<table border="1" >
                <?php
                foreach ($about as $row):?>
                  <tr>
                  		<th>Nama: </th>
                  		<th>Nim: </th>
                  		<th>Jurusan: </th>
                  		<th>Mata Kuliah: </th>
                  </tr>
                    <tr>
	                    <td scope="row"><?= $row->nama; ?></td>
             	       <td><?= $row->nim ?></td>
                	    <td><?= $row->jurusan ?></td>
     	               <td> <?= $row->matakuliah ?></td>
                    </tr>
                   
                    <?php endforeach; ?> 
                   
                </table>
                </div>
            </div>
        </div>
            <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
                <div class="container text-center">Copyright &copy <?= Date('Y')?> Anisa </div>
            </footer>
          <!-- Jquery dan Bootsrap JS -->
      <script src="<?= base_url('js/jquery.min.js')?>"></script>
      <script src="<?= base_url('js/bootstrap.min.js')?>"></script>                  
</body>
</html>